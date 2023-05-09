import mysql.connector

mydb = mysql.connector.connect(
  host="127.0.0.1",
  user="root",
  database = "gameLibrary"
)

mycursor = mydb.cursor()

mycursor.execute("Select title From Games" )

myresult = mycursor.fetchall()

for x in myresult:
    print(x)
    
    
    