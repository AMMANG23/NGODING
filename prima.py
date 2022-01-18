
#menampilkan bilangan prima
for i in range(2,100,1):
        mod = 1
        for x in range(2,i,1):
                if i%x == 0:
                        mod = 0
        if mod == 1:
                print(i)

