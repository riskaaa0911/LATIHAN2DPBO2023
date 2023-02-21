# Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Membuat kelas Human
class Human:
    # Deklarasi atribut privat
    __nik = ""
    __nama = ""
    __gender = ""

    # konstruktor
    def __init__(self, nik="", nama="", gender=""):
        self.__nik = nik
        self.__nama = nama
        self.__gender = gender

    # method setter dan getter
    def setNik(self, nik):
        self.__nik = nik

    def setNama(self, nama):
        self.__nama = nama

    def setGender(self, gender):
        self.__gender = gender

    def getNik(self):
        return self.__nik

    def getNama(self):
        return self.__nama

    def getGender(self):
        return self.__gender
