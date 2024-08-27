Diagrama de Casos de Uso – Sistema de Gerenciamento de Projetos
Atores:
Usuário (Projetista)
Gerente (Administrador)

Casos de Uso:
Usuário (Projetista):

Login: O usuário faz login no sistema.

Consultar Projetos e Status do Projeto: O usuário visualiza a lista de projetos e seus status.
Se Inscrever para Projetos: O usuário se inscreve em projetos disponíveis.
Gerente (Gerente):

Login: O Gerente faz login no sistema.

Adicionar Projetos: O Gerente cria novos projetos.
Consultar Projetos e Status do Projeto: O Gerente visualiza a lista de projetos e seus status.
Excluir Projetos: O Gerente exclui projetos existentes.
Editar o Status de Projetos: O Gerente altera o status dos projetos.

---------------------------------------------------------------------
Diagrama de Fluxo de Processo – Gerenciamento de Projetos
Início

Usuário/Gerente

Credenciais válidas?
Sim: Continuar.
Não: Exibir mensagem de erro.

Usuário:
Visualizar Projetos: O usuário visualiza os projetos disponíveis.
Se Inscrever/Finalizar  projetos já existentes: O usuário se inscreve ou finaliza sua inscrição em projetos.

Gerente:
Ver Participantes dos Projetos: O Gerente visualiza os participantes dos projetos.
Visualizar Projetos: O Gerente visualiza os projetos disponíveis.
Ver/Editar Status dos Projetos: O Gerente visualiza e altera o status dos projetos.
Adicionar/Excluir Projetos: O Gerente adiciona ou exclui projetos.
Logout: O usuário ou Gerente faz logout do sistema.

Fim


#----------------------------------MÉTODOS--------------------------------#
Métodos CRUD para Usuário e Administrador
Login (Usuário e Administrador):

Método: login()
Descrição: Autentica o usuário com base nas credenciais fornecidas. Retorna uma resposta para o redirecionamento apropriado se a autenticação for bem-sucedida ou exibe uma mensagem de erro em caso contrário.
Consultar Projetos e Status do Projeto:

Método: index()
Descrição: Recupera e exibe a lista de projetos disponíveis e seus respectivos status. Pode ser usado tanto por usuários quanto por administradores para visualizar as informações dos projetos.
Se Inscrever para Projetos (Usuário):

Método: store()
Descrição: Permite que um usuário se inscreva em um projeto. Valida as informações da solicitação e cria uma nova inscrição na base de dados.
Adicionar Projetos (Administrador):

Método: destroy($id)
Descrição: Remove um projeto existente com base no identificador fornecido. Também lida com a eliminação de associações e dados relacionados ao projeto.
Editar o Status de Projetos (Administrador):

Método: update($id, Request $request)
Descrição: Atualiza o status de um projeto específico. Recebe o novo status e persiste a alteração no banco de dados.
Métodos Adicionais

Visualizar Participantes dos Projetos (Administrador):
Método: verParticipantesProjeto($id)
Descrição: Recupera e exibe a lista de participantes envolvidos em um projeto específico. Permite ao administrador ver quais usuários estão associados a um projeto.

Método: Logout para ambos os usuarios

+---------------------------------+
|             Usuario             |
+---------------------------------+
| - nomeUsuario: varchar          |
| - emailUsuario: varchar         |
| - cargoUsuario: bigint          |
| - nomeGerenteUsuario: varchar   |
| - nomeEmpresaUsuario: varchar   |
| - equipe_id: bigint             |
| - password: string              |
+---------------------------------+
|                                 |
+---------------------------------+

+---------------------------------+
|          Inscricao              |
+---------------------------------+
| - idUsuarioFK: bigint           |
| - idProjetoFK: bigint           |
| - descricaoSolicitacao: varchar |
| - nomeUsuSolit: varchar         |
+---------------------------------+
|                                 |
+---------------------------------+

+---------------------------------+
|            Equipe               |
+---------------------------------+
| - nomeEquipe: varchar           |
| - qtdMembrosEquipe: integer     |
| - usuCriadorEquipe: bigint      |
+---------------------------------+
|                                 |
+---------------------------------+

+---------------------------------+
|            Projeto              |
+---------------------------------+
| - nomeProjeto: varchar          |
| - descricaoProjeto: varchar     |
| - terminoProjeto: timestamp     |
| - responsaveisProjeto: varchar  |
| - criadorProjetoFk: bigint      |  
| - equipeProjetoFk: bigint       |
+---------------------------------+
|                                |
+--------------------------------+
