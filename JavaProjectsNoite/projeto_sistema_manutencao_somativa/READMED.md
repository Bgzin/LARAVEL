<<-DESCRIÇÃO TECNICA DO PROJETO-->>

##O Sistema de Manutenção Preventiva e Corretiva é um software destinado ao gerenciamento do ciclo de vida de máquinas e equipamentos industriais, com foco em minimizar o tempo de inatividade e otimizar a performance operacional. Ele permite o controle das manutenções preventivas (realizadas regularmente para evitar falhas) e corretivas (realizadas após uma falha). O sistema também inclui funcionalidades para registrar falhas, gerenciar técnicos, gerar relatórios e acompanhar indicadores de desempenho, como o MTTR (Mean Time to Repair - Tempo Médio de Reparo) e o MTBF (Mean Time Between Failures - Tempo Médio Entre Falhas).

##Funcionalidades Principais:
Gerenciamento de Máquinas e Equipamentos:
Cadastro de máquinas, incluindo especificações técnicas, data de aquisição e localização.
Visualização e edição de informações de máquinas.
Registro e Controle de Manutenções:
Registro de manutenções preventivas e corretivas.
Histórico completo de manutenções para cada máquina.
Registro de peças substituídas e tempo de inatividade.
Gerenciamento de Falhas:
Registro de falhas ocorridas, classificando a severidade e identificando o operador.
Controle de falhas por máquina.
Gerenciamento de Técnicos:
Cadastro de técnicos, incluindo suas especialidades e disponibilidade.
Relatórios e Indicadores:
Geração de relatórios de manutenção, tempo de inatividade, falhas e peças trocadas.
Cálculo de indicadores como MTTR e MTBF.
Integração com API:
Utilização de uma API REST (JSON-Server) para armazenar e recuperar dados.

##Requisitos Funcionais:
O sistema deve permitir o cadastro de máquinas com suas especificações.
O sistema deve registrar manutenções preventivas e corretivas, associando técnicos e peças trocadas.
O sistema deve gerar relatórios de manutenção e indicadores de performance.
O sistema deve oferecer uma interface gráfica intuitiva para o usuário final.

##Requisitos Não Funcionais:
O sistema deve ser responsivo, com tempo de resposta rápido ao realizar operações com a API.
A interface deve ser amigável e permitir fácil navegação entre as funcionalidades.
O sistema deve armazenar e recuperar dados de maneira segura e eficiente.


##ESCOPO

# Sistema de Manutenção Preventiva e Corretiva

## Objetivo Geral
Desenvolver um software para o gerenciamento do ciclo de vida de máquinas e equipamentos industriais, visando minimizar o tempo de inatividade e otimizar a performance operacional.

## Funcionalidades Principais

1. **Gerenciamento de Máquinas e Equipamentos:**
   - Cadastro de máquinas com especificações técnicas, data de aquisição e localização.
   - Visualização e edição das informações de máquinas.

2. **Registro e Controle de Manutenções:**
   - Registro de manutenções preventivas e corretivas.
   - Histórico completo de manutenções, incluindo peças substituídas e tempo de inatividade.

3. **Gerenciamento de Falhas:**
   - Registro de falhas ocorridas, classificando a severidade e identificando o operador.
   - Controle de falhas por máquina.

4. **Gerenciamento de Técnicos:**
   - Cadastro de técnicos, incluindo especialidades e disponibilidade.

5. **Relatórios e Indicadores:**
   - Geração de relatórios de manutenção, tempo de inatividade, falhas e peças trocadas.
   - Cálculo de indicadores como MTTR e MTBF.

6. **Integração com API:**
   - Utilização de uma API REST (JSON-Server) para armazenamento e recuperação de dados.

## Requisitos Funcionais

- O sistema deve permitir o cadastro de máquinas com suas especificações.
- O sistema deve registrar manutenções preventivas e corretivas, associando técnicos e peças trocadas.
- O sistema deve gerar relatórios de manutenção e indicadores de performance.
- O sistema deve oferecer uma interface gráfica intuitiva para o usuário final.

## Requisitos Não Funcionais

- O sistema deve ser responsivo, com tempo de resposta rápido ao realizar operações com a API.
- A interface deve ser amigável e permitir fácil navegação entre as funcionalidades.
- O sistema deve armazenar e recuperar dados de maneira segura e eficiente.

## Modelagem do Sistema

### Diagrama de Classes

1. **Máquina**
   - Atributos: `id`, `nome`, `especificacoes`, `dataAquisicao`, `localizacao`
   - Métodos: `cadastrar()`, `editar()`, `deletar()`, `visualizar()`

2. **Manutenção**
   - Atributos: `id`, `tipo`, `data`, `idMaquina`, `idTecnico`, `peçasSubstituidas`, `tempoInatividade`
   - Métodos: `registrar()`, `editar()`, `deletar()`, `visualizar()`

3. **Técnico**
   - Atributos: `id`, `nome`, `especialidade`, `disponibilidade`
   - Métodos: `cadastrar()`, `editar()`, `deletar()`, `visualizar()`

4. **Falha**
   - Atributos: `id`, `descricao`, `severidade`, `idMaquina`, `operador`
   - Métodos: `registrar()`, `editar()`, `deletar()`, `visualizar()`

### Diagrama de Sequência (Cenário de Adição de Manutenção)

1. O usuário clica no botão para adicionar uma nova manutenção.
2. A interface gráfica exibe o formulário de preenchimento de dados.
3. O usuário preenche os campos e envia os dados.
4. O controlador valida as informações.
5. O controlador envia uma requisição à API JSON-Server.
6. A API armazena a nova manutenção e retorna uma resposta de sucesso.
7. O sistema exibe uma mensagem de sucesso ao usuário.

## Levantamento de Recursos
*(Defina aqui as ferramentas e bibliotecas que você planeja utilizar, como Swing, JSON-Server, etc.)*

## Análise de Riscos
*(Identifique e liste os riscos que você prevê no projeto, como problemas de integração, prazos apertados, etc.)*


##OBJETIVOS

## Objetivos

1. **Desenvolver uma Interface Gráfica:**
   - Criar uma interface intuitiva usando Swing para o gerenciamento de máquinas, técnicos e manutenções, proporcionando uma experiência de usuário amigável.

2. **Implementar Funcionalidades CRUD:**
   - Desenvolver funcionalidades para Criar, Ler, Atualizar e Deletar (CRUD) registros de máquinas, manutenções, falhas e técnicos, garantindo um gerenciamento eficaz dos dados.

3. **Gerar Relatórios e Indicadores:**
   - Implementar a geração de relatórios detalhados com base nos dados registrados, incluindo a análise de indicadores de desempenho como MTTR (Mean Time to Repair) e MTBF (Mean Time Between Failures).

4. **Conectar com API:**
   - Estabelecer uma conexão com uma API REST (JSON-Server) para armazenar e manipular dados em tempo real, garantindo que as informações sejam sempre atualizadas.

5. **Garantir Validação e Testes:**
   - Realizar validações rigorosas e testes abrangentes para garantir a robustez, segurança e eficiência do sistema, minimizando riscos de falhas e maximizando a performance.


##LEVANTAMENTO DE RECURSOS

## Levantamento de Recursos

1. **Linguagem de Programação:**
   - Java

2. **Interface Gráfica:**
   - Biblioteca Swing para o desenvolvimento da interface gráfica do usuário.

3. **API:**
   - JSON-Server para simular uma API RESTful para armazenamento e manipulação de dados.

4. **Banco de Dados:**
   - Utilização de arquivos JSON para armazenamento de dados (via JSON-Server) 

5. **Ferramentas de Desenvolvimento:**
   - IDE (Ambiente de Desenvolvimento Integrado) como Usarei o Visual Studio Code, e guardarei no GitHub

6. **Bibliotecas Adicionais:**
   - Bibliotecas para manipulação de JSON, como Gson ou Jackson.
   - JUnit para testes unitários.

7. **Documentação:**
   - Ferramentas para documentação do código, como Javadoc.

8. **Recursos Humanos:**
   - Equipe de desenvolvimento (se aplicável) com conhecimento em Java e desenvolvimento de software.

9. **Tempo:**
   - Planejamento do tempo de desenvolvimento e testes para cada funcionalidade.

10. **Hardware:**
    - Computadores ou servidores para desenvolvimento e testes.


##ANALISE DE RISCOS

## Análise de Riscos

1. **Risco de Integração:**
   - **Descrição:** Dificuldades na integração com a API JSON-Server podem causar atrasos.
   - **Mitigação:** Realizar testes de integração desde o início do desenvolvimento e garantir que a documentação da API esteja clara.

2. **Risco de Tempo de Desenvolvimento:**
   - **Descrição:** O tempo disponível para desenvolvimento (de 07/10 a 11/10) pode ser insuficiente para implementar todas as funcionalidades.
   - **Mitigação:** Priorizar funcionalidades essenciais e seguir um cronograma rigoroso.

3. **Risco de Usabilidade:**
   - **Descrição:** A interface gráfica pode não ser intuitiva, resultando em dificuldades para os usuários finais.
   - **Mitigação:** Realizar testes de usabilidade com usuários reais e fazer ajustes conforme necessário.

4. **Risco de Segurança:**
   - **Descrição:** A manipulação de dados sensíveis pode ser vulnerável a ataques.
   - **Mitigação:** Implementar boas práticas de segurança na manipulação de dados e considerar autenticação se necessário.

5. **Risco de Falhas de Sistema:**
   - **Descrição:** O sistema pode apresentar falhas durante o uso, especialmente se não for testado adequadamente.
   - **Mitigação:** Realizar testes unitários e de integração para identificar e corrigir falhas antes do lançamento.

6. **Risco de Performance:**
   - **Descrição:** O sistema pode ter desempenho insatisfatório ao lidar com um grande volume de dados.
   - **Mitigação:** Monitorar a performance durante os testes e otimizar o código conforme necessário.

7. **Risco de Dependência de Recursos:**
   - **Descrição:** A dependência de ferramentas externas e bibliotecas pode levar a problemas se elas não funcionarem como esperado.
   - **Mitigação:** Verificar a compatibilidade e realizar testes preliminares com as bibliotecas escolhidas.

8. **Risco de Falta de Documentação:**
   - **Descrição:** A falta de documentação adequada pode dificultar a manutenção futura do sistema.
   - **Mitigação:** Criar documentação detalhada durante o desenvolvimento, utilizando Javadoc e outros métodos de documentação.






