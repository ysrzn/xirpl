import java.util.Scanner;

public class perulanganInput {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Berapa kali ingin diulang? ");
        int jumlahPerulangan = scanner.nextInt();

        for (int i = 0; i < jumlahPerulangan; i++) {
            System.out.print((i + 1) + " ");
        }

        scanner.close();
    }
}
