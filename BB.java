import java.util.Scanner;
class TestClass {
    public static void main(String args[] ) throws Exception {
        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();
        int N = sc.nextInt();
        for(int i=0; i<a;i++){
            int sum=0;
            
            while(N!=0){
            sum+=N%2;
            N=N/2;
            }
            System.out.println(sum);
        }

    }
}