import mysql.connector as mysql

# Replace these values with your database connection details
host = "localhost"
user = "root"
password = ""
database = "asset_management_system"


connection = mysql.connect(
        host=host,
        user=user,
        password=password,
        database=database
    )
cursor=connection.cursor()
cursor.execute("SELECT email,password FROM user_tbl")
mydata=cursor.fetchall()
print(mydata)
 