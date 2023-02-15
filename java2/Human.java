/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

class Human {
    private String nik;
    private String nama;
    private String gender;

    Human() {
        
    }

    public void setNik(String nik) {
        this.nik = nik;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getNik() {
        return this.nik;
    }

    public String getNama() {
        return this.nama;
    }

    public String getGender() {
        return this.gender;
    }

}