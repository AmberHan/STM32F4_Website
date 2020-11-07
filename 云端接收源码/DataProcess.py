def data_process(db, data):
    print(data)
    data = data.split(',')
    data[0] = data[0].split()
    for i in range(len(data)-1):
        data[i+1] = data[i+1].split()
        '''build sql'''
        sql = "insert into conditionMonitor(machineNumber,\
acquisitionTime,humidity,temperature,alarmNumber,\
voltage1,voltage2,voltage3,electricity1,electricity2,\
electricity3) values('" + data[i+1][0] + "',now()," + \
        data[0][1] + "," + data[0][0] + "," + data[i+1][7] + "," + \
        data[i+1][1] + "," + data[i+1][2] + "," + data[i+1][3] + "," + \
        data[i+1][4] + "," + data[i+1][5] + "," + data[i+1][6] + ");"
        '''store data into database'''
        db.data_store(sql)

