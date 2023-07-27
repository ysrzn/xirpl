public class menuMakanan {
    public static void main(String[] args) {
        String[] daftarMenu = {
            "Nasi Goreng",
            "Soto",
            "Rawon",
            "Bakso",
            "Tahu Lontong",
            "Nasi Campur",
            "Lalapan",
            "Nasi Liwet",
            "Bakmi",
            "Sate",
            "Gule",
            "Tahu Campur"
        };

        for (int i = 0; i < daftarMenu.length; i++) {
            System.out.println("Indeks ke-" + i + " menu makanan " + daftarMenu[i]);
        }
    }
}
