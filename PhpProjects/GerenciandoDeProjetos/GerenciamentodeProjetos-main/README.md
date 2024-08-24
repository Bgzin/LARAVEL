+--------------------+
|        User        |
+--------------------+
| - id: int          |
| - name: string     |
| - email: string    |
| - password: string |
+--------------------+
| + login() : boolean |
| + visualizarProjetos() : Collection<Projeto> |
| + seInscreverProjeto(projeto: Projeto) : void |
| + finalizarInscricao(projeto: Projeto) : void |
+--------------------+
         ^
         |
         |
+--------------------+
|       Admin        |
+--------------------+
|                    |
+--------------------+
| + adicionarProjeto(projeto: Projeto) : void |
| + excluirProjeto(projeto: Projeto) : void |
| + editarStatusProjeto(projeto: Projeto, status: string) : void |
| + verParticipantesProjeto(projeto: Projeto) : Collection<User> |
+--------------------+

+--------------------+
|      Projeto       |
+--------------------+
| - id: int          |
| - nome: string     |
| - descricao: string|
| - status: string   |
+--------------------+
| + atualizarStatus(status: string) : void |
| + getParticipantes() : Collection<User> |
+--------------------+
         ^
         |
         |
+--------------------+
|   Participacao     |
+--------------------+
| - id: int          |
| - user_id: int     |
| - projeto_id: int  |
| - status: string   |
+--------------------+
| + alterarStatus(status: string) : void |
+--------------------+








