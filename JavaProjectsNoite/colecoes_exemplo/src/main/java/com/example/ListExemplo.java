import java.util.ArrayList;
import java.util.List;

public class ListExemplo {
    private List<String> nomes;

    public ListExemplo(){
        nomes = new ArrayList<>();
    }

    public void adicionarNome(String nome){
        nomes.add(nome);
        System.out.println(nomes.indexOf(nome));
    }

    public void listarNomes(){
         for (String nome : nomes) {
            System.out.println(nome);
            
         }
    }
}
