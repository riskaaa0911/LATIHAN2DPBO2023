/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

class SivitasAkademik extends Mahasiswa {
    private String asal_univ;
    private String email;

    SivitasAkademik() {
        
    }
    public void setUniv(String asal_univ) {
        this.asal_univ = asal_univ;
    }

    public void setEmail(String email) {
        this.email = email;
    }
    

    public String getUniv() {
        return this.asal_univ;
    }

    public String getEmail() {
        return this.email;
    }
}