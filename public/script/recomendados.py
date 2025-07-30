# Script artículos recomendados #
# Desarrollo Colaboratorio 2024 #

# Importar bibliotecas NLTK
import sys
import nltk
nltk.data.path.append("/home/sail/nltk_data/")
import sklearn
import mysql.connector
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.stem import SnowballStemmer
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

# Descargar recursos necesarios de NLTK
#nltk.download('punkt')
#nltk.download('stopwords')
# Configurar el stemmer para español
spanish_stemmer = SnowballStemmer("spanish")

# Función para preprocesar y tokenizar el texto de entrada
def preprocess_text(text):
    # Tokenizar el texto, convertir a minúsculas y tokenizar
    tokens = word_tokenize(text.lower())
    # Quitar palabras de parada y signos de puntuación
    stop_words = set(stopwords.words('spanish'))
    tokens = [word for word in tokens if word.isalnum() and word not in stop_words]
    # Stemming de las palabras
    stemmed_tokens = [spanish_stemmer.stem(word) for word in tokens]
    return " ".join(stemmed_tokens)

mydb = mysql.connector.connect(
  host="44.216.229.140",
  user="facso",
  password="-.,F4cs0.F1d4.2024,.-",
  database="facso_app"
)

mycursor = mydb.cursor(dictionary=True)

mycursor.execute("SELECT id,descripcion FROM proyectos where descripcion !=''")

myresult = mycursor.fetchall()

mycursor.close()

respuesta = []
ids = []

for row in myresult:
    respuesta.append(row['descripcion'])
    ids.append(row['id'])

article_descriptions = respuesta

# Preprocesar y tokenizar las descripciones de los artículos
preprocessed_descriptions = [preprocess_text(desc) for desc in article_descriptions]

# Crear una matriz TF-IDF de las descripciones preprocesadas
tfidf_vectorizer = TfidfVectorizer()
tfidf_matrix = tfidf_vectorizer.fit_transform(preprocessed_descriptions)

# Función para recomendar artículos basados en palabras clave
def recommend_articles(query, num_recommendations=100):
    # Preprocesar y tokenizar la consulta
    query = preprocess_text(query)
    # Transformar la consulta en un vector TF-IDF
    query_vector = tfidf_vectorizer.transform([query])
    # Calcular la similitud coseno entre la consulta y las descripciones de los artículos
    similarity_scores = cosine_similarity(query_vector, tfidf_matrix)
    # Obtener los índices de los artículos más similares
    top_indices = similarity_scores.argsort()[0][-num_recommendations:][::-1]
    # Obtener los artículos recomendados
    recommended_articles = [article_descriptions[idx] for idx in top_indices]
    return (recommended_articles,top_indices)

# Script para recomendar artículos basados en una o más palabra
query = sys.argv[1]
(recommended_articles,tp) = recommend_articles(query)
result = []
for idx, article in enumerate(recommended_articles, 1):
    id = ids[tp[idx-1]]
    result.append(id)
#print (result).strip('[]')

print (*result, sep = ", ")
