Diagrama de Casos de Uso – Sistema de Gerenciamento de Projetos
Atores:
1.	Usuário (Projetista)
2.	Administrador (Gerente)
Casos de Uso:
1.	Usuário (Projetista):
o	Login
o	Consultar Projetos e Status do Projeto
o	Se Inscrever para Projetos
2.	Administrador (Gerente):
o	Login
o	Adicionar Projetos
o	Consultar Projetos e Status do Projeto
o	Excluir Projetos
o	Editar o status de Projetos



Diagrama de Fluxo de Processo – Gerenciamento de Projetos
Início
1.	Usuário/Administrador
o	Credenciais válidas?
	Sim: Continuar
	Não: Exibir mensagem de erro
2.	Usuário/Administrador
o	Usuário:
	Visualizar Projetos
	Se Inscrever/Finalizar em projetos já existentes
o	Administrador:
	Ver Participantes dos Projetos
	Visualizar Projetos
	Ver/Editar Status dos Projetos
	Adicionar/Excluir Projetos
3.	Logout
Fim




 
Diagrama de Casos de Uso – Sistema de Gerenciamento de Projetos
Atores:
3.	Usuário (Projetista)
4.	Administrador (Gerente)
Casos de Uso:
3.	Usuário (Projetista):
o	Login
o	Consultar Projetos e Status do Projeto
o	Se Inscrever para Projetos
4.	Administrador (Gerente):
o	Login
o	Adicionar Projetos
o	Consultar Projetos e Status do Projeto
o	Excluir Projetos
o	Editar o status de Projetos



Diagrama de Fluxo de Processo – Gerenciamento de Projetos
Início
4.	Usuário/Administrador
o	Credenciais válidas?
	Sim: Continuar
	Não: Exibir mensagem de erro
5.	Usuário/Administrador
o	Usuário:
	Visualizar Projetos
	Se Inscrever/Finalizar em projetos já existentes
o	Administrador:
	Ver Participantes dos Projetos
	Visualizar Projetos
	Ver/Editar Status dos Projetos
	Adicionar/Excluir Projetos
6.	Logout
Fim

Diagrama de Fluxo

O diagrama de fluxo descreve o fluxo de processos e decisões no sistema de gerenciamento da biblioteca

Diagrama de Fluxo de Processo – Gerenciamento de Projetos

Inicio

1. Usuário/Admistrador
  -Credenciais válidas?
  -Sim: Continuar
  -Não: Exibir mensagem de erro

2. Usuário/Administrador
      -Usuário:
           -Visualizar Projetos
               -Se Inscrever/Finalizar em projetos já existentes
                   
-Administrador:
 -Ver participantes dos Projetos
   -Visualizar Projetos
      -Ver/Editar Status dos projetos
         -Adicionar/Excluir Projetos
     

 3. Logout
             
      
Fim.    



 
Diagrama de Classes para o Sistema de Ger enciamento de Projetos


1. Classe User
•	Atributos:
o	id: int - Identificador único do usuário (automático, gerado pelo sistema).
o	name: string - Nome completo do usuário.
o	email: string - Endereço de e-mail do usuário.
o	password: string - Senha do usuário (armazenada de forma segura e criptografada).

•	Métodos:
	-login() : boolean: Método responsável por autenticar o usuário com base nas suas credenciais. Retorna true se a autenticação for bem-sucedida e false caso contrário.
	-visualizarProjetos() : Collection<Projeto>: Método que retorna uma coleção de projetos associados ao usuário. Utiliza o relacionamento muitos-para-muitos com a classe Projeto.
	-seInscreverProjeto(projeto: Projeto) : void: Método que permite ao usuário se inscrever em um projeto. Adiciona o projeto à lista de projetos do usuário na tabela de participação.
	-finalizarInscricao(projeto: Projeto) : void: Método que permite ao usuário finalizar a inscrição em um projeto específico, removendo a associação do projeto na tabela de participação.


2. Classe Admin (Herda de User)

•	Métodos Adicionais:
     	-adicionarProjeto(projeto: Projeto) : void: Método para criar e adicionar um novo projeto ao sistema. Inclui a criação de uma nova instância da classe Projeto e sua persistência no banco de dados.
             -	excluirProjeto(projeto: Projeto) : void: Método para remover um projeto existente do sistema, incluindo a eliminação de suas associações e dados relacionados.
o	         -  editarStatusProjeto(projeto: Projeto, status: string) : void: Método para atualizar o status de um projeto específico. A mudança é persistida no banco de dados.
o	     verParticipantesProjeto(projeto: Projeto) : Collection<User>: Método que retorna uma coleção de usuários envolvidos em um projeto específico.

3. Classe Projeto
•	Atributos:
o	id: int - Identificador único do projeto (automático, gerado pelo sistema).
o	nome: string - Nome do projeto.
o	descricao: string - Descrição detalhada do projeto.
o	status: string - Status atual do projeto, como "Em andamento" ou "Concluído".
•	Métodos:
o	atualizarStatus(status: string) : void: Método para atualizar o status do projeto e persistir a mudança no banco de dados.
o	getParticipantes() : Collection<User>: Método que retorna uma coleção de usuários associados ao projeto, utilizando o relacionamento muitos-para-muitos com a classe User.

4. Classe Participacao (Tabela Pivot)
•	Atributos:
o	id: int - Identificador único da participação (automático, gerado pelo sistema).
o	user_id: int - Chave estrangeira referenciando o User.
o	projeto_id: int - Chave estrangeira referenciando o Projeto.
o	status: string - Status da participação do usuário no projeto.
•	Métodos:
o	alterarStatus(status: string) : void: Método para atualizar o status da participação e persistir a mudança na tabela pivot.
Relacionamentos
1.	User e Admin
o	Admin é uma especialização de User, herdando todos os atributos e métodos da classe User. A classe Admin possui métodos adicionais para a gestão de projetos.
2.	User e Projeto
o	Relacionamento muitos-para-muitos entre User e Projeto, mediado pela tabela pivot participacoes. Em Laravel, isso é gerenciado através do método belongsToMany() do Eloquent.
3.	Projeto e Participacao
o	Um Projeto pode ter várias entradas na tabela Participacao, representando as diferentes inscrições de usuários.
4.	User e Participacao
o	Um User pode ter várias entradas na tabela Participacao, representando suas inscrições em diferentes projetos.
