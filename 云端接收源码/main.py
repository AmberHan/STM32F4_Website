from Connect import Port_reception, Database
from DataProcess import data_process

host = '172.31.13.54'
port = 8087
user = 'root'
password = '123456'
db_name = 'db_mffh'

'''port connection'''
port = Port_reception(host, port)
'''database connection'''
db = Database(host)
db.set_user(user, password, db_name)

for line in port.incoming(): 
    data_process(db, line)

