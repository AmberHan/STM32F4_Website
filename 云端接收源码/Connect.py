import pymysql
import socket

class Port_reception():

    def __init__(self, host, port):
        self.host = host
        self.port = port

    def incoming(self):
        '''Open specified port and return file-like object'''
        self.sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        self.sock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
        self.sock.bind((self.host, self.port))
        print('connect')
        self.sock.listen(0)
        request, addr  = self.sock.accept()
        print('access data')
        return request.makefile('r')


class Database():
    def __init__(self, host):
        self.host = host

    def set_user(self, user, password, db_name):
        self.user = user
        self.password = password
        self.db_name = db_name

    def data_store(self, sql):
        db = pymysql.connect(self.host, self.user, self.password, self.db_name)
        cursor = db.cursor()
        try:
            cursor.execute(sql)
            db.commit()
            print('store successful')
        except:
            db.rollback()
            print('store fail')
        db.close()

