import cgi as cg

form=cg.FieldStorage()
email=form.getvalue("email")
password=form.getvalue("password")
print(email)