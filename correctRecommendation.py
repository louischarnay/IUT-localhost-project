import codecs


def correct():
    path = "php/recommendation.csv"
    f = codecs.open(path,encoding='utf-8')
    contents = f.read()


    newcontents = contents.replace('[',',')
    newcontents = newcontents.replace(']','')
    newcontents = newcontents.replace("'", '')

    print (newcontents)

    f.close()

    file = open(path,"w")
    file.write(newcontents)
    file.close()

correct()