# Documento de Casos de Uso

## Lista dos Casos de Uso 2

 - [CDU 01](#CDU-1---Fazer-login): Fazer login.
 - [CDU 02](#CDU-2---Fazer-logout): Fazer logout.  
 - [CDU 03](#CDU-3---Realizar-agendamento): Realizar Agendamento.
 - [CDU 04](#CDU-4---Listar-Agendamentos): Listar Agendamentos.
 - [CDU 05](#CDU-5---Cadastrar-funcionário): Cadastrar funcionário.
 - [CDU 06](#CDU-6---Cadastrar-cliente): Cadastrar cliente.
 - [CDU 07](#CDU-7---Editar-Cadastro-de-usuário): Editar Cadastro de usuário.
 - [CDU 08](#CDU-8---Listar-Cadastro-de-usuário): Listar Cadastro de usuário.
 - [CDU 09](#CDU-9---Adicionar-serviço): Adicionar serviço.
 - [CDU 010](#CDU-10---Editar-serviço): Editar serviço.
 - [CDU 011](#CDU-11---Listar-serviços): Listar serviços.
 - [CDU 012](#CDU-12---Disponibilizar-horário): Disponibilizar horário. 
 - [CDU 013](#CDU-13---Visualizar-agendamento):  Visualizar agendamento.
 - [CDU 014](#CDU-14---Recuperar-Senha): Recuperar Senha.

## Lista dos Atores

 - Administrador
 - Funcionário
 - Cliente 

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 1 - Fazer login

#### Atores
- Administrador
- Funcionário
- Cliente 

**Fluxo Principal**

1. O usuário seleciona a opção "Entrar".
2. O sistema solicita ao usuário os dados necessários para login.
3. O usuário fornece os dados e confirma a operação.
5. O sistema verifica as informações fornecidas pelo usuário.
6. O sistema faz o login do usuário.
7. O usuário é redirecionado para a tela de perfil.

![Diagrama de Casos de Uso](Diagramas/Diagramas%20de%20Sequ%C3%AAncia/CDU%201%20-%20Fazer%20Login(Fluxo%20Principal).pngc)


**Fluxo Alternativo A**

1. O usuário seleciona a opção "Entrar"
2. O sistema solicita ao usuário os dados necessários para login.
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica as informações fornecidas pelo usuário e apresenta a mensagem "login inválido".

**Fluxo Alternativo B**

1. O usuário seleciona a opção "Entrar"
2. O sistema solicita ao usuário os dados necessários para login.
3. O Usuário cancela o login pressionando o botão "X".
4. O usuário é redirecionado para a tela de principal.

### CDU 2 - Fazer logout

#### Atores
- Administrador
- Funcionário
- Cliente
 
**Fluxo Principal**

1. O usuário seleciona a opção "Logout"
2. O sistema desloga o usuário.
3. O usuário é redirecionado para a página principal.

### CDU 3 - Realizar Agendamento

#### Atores
- Cliente
 
**Fluxo Principal**

1. O usuário seleciona opção "Agendamento". 
2. O sistema solicita os dados necessários para realizar um agendamento.
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica os dados e mostra uma mensagem de confirmação.

**Fluxo Alternativo A**

1. O usuário seleciona opção "Agendamento".
2. O sistema solicita os dados necessários para realizar agendamento .
3. O usuário não fornece todos os dados necessários e confirma a operação
4. O sistema apresenta a mensagem "Selecione uma das opções".

### CDU 4 - Listar Agendamentos

#### Atores
 - Administrador
 - Funcionário

**Fluxo Principal**

1. O usuário seleciona a opção "Listar agendamentos"
2. O sistema apresentará uma lista com todos os agendamentos realizados.

### CDU 5 - Cadastrar funcionário

#### Atores
 - Administrador
 
**Fluxo Principal**

1. O usuário seleciona a opção "Funcionários"
2. O sistema solicita os dados necessários para o cadastro de um funcionário. 
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica se todos os dados foram fornecidos corretamente e cadastra o funcionário no sistema.

### CDU 6 - Cadastrar cliente

#### Atores
 - Administrador
 - Cliente
**Fluxo Principal**

1. O usuário seleciona a opção "cadastre-se".
2. O sistema solicita os dados necessários para o cadastro. 
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica se todos os dados foram fornecidos e cadastra o usuário .
5. O usuário é redirecionado para a tela de perfil.

**Fluxo Alternativo A** 

1. O usuário seleciona a opção "cadastre-se"
2. O Usuário cancela a realização do cadastro pressionando um botão "X", exibido na tela.
3. O usuário é redirecionado para a tela principal.

**Fluxo Alternativo B**

1. O usuário seleciona a opção "cadastre-se".
2. O sistema solicita os dados necessários para o cadastro. 
3. O usuário fornece os dados incorretamente e confirma a operação.
4. O sistema verifica se todos os dados foram fornecidos e apresenta uma mensagem de erro .

### CDU 7 - Editar Cadastro de usuário

#### Atores
- Administrador
- Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Editar dados".
2. O sistema apresentara um bloco com os dados editáveis de seu cadastro.
3. O usuário edita os dados desejados e seleciona "Alterar".
4. O sistema confere os dados inseridos e altera o cadastro.


**Fluxo Alternativo A**

1. O usuário seleciona a opção "Excluir conta".
2. O sistema apresentara um bloco exigindo a senha e sua confirmação.
3. O usuário seleciona o botão "Excluir".
4. O sistema exclui o cadastro e redireciona o usuário para a tela principal.


### CDU 8 - Listar Cadastro de usuário 

#### Atores
-Administrador

**Fluxo Principal**

1. O usuário seleciona a opção clientes.
2. O sistema apresenta uma lista de usuarios cadastrados.

### CDU 9 - Adicionar serviço 

#### Atores
-Administrador

**Fluxo Principal**


1. O usuário seleciona a opção "Serviços".
2. O sistema solicita os dados necessários para adicionar um serviço.
3. O usuário preenche os dados com os dados necessários.
4. O serviço é armazenado no sistema.

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Adicionar Serviço".
2. O sistema solicita os dados necessários para adicionar um serviço.
3. O usuário fornece os dados incorretamente e confirma a operação.
4. O sistema verifica se todos os dados foram fornecidos e apresenta uma mensagem de erro.


### CDU 10 - Editar serviço

#### Atores
-Administrador

**Fluxo Principal**
1. O usuário seleciona a opção "Serviços".
2. O sistema apresenta um bloco com todos os serviços disponíveis.
3. O usuário seleciona a opção "Editar"
4. O sistema abrirá uma página com dados editáveis do serviço.
5. O usuário edita os dados desejados e seleciona "Editar".
6. O sistema confere os dados inseridos e edita o serviço
7. O usuário é redirecionado para tela de perfil. 

**Fluxo Alternativo A**
1. O usuário seleciona a opção "Serviços".
2. O sistema apresenta um bloco com todos os serviços disponíveis.
3. O usuário seleciona a opção "Excluir".
4. O sistema exclui o serviço.

### CDU 11 - Listar serviços

#### Atores
-Administrador

**Fluxo Principal**

1. O usuário seleciona a opção "Serviços".
2. O sistema apresenta uma lista de serviços

### CDU 12 - Disponibilizar horário

#### Atores
- Administrador

**Fluxo Principal**

1. Usuário seleciona a opção "Grade Horaria".
2. Usuário seleciona um funcionário.
3. Sistema exibe calendário do funcionário.
4. O usuário preenche os dados com os dados necessários.
5. O Horário é armazenado e o sistema exibe uma mensagem de confirmação

**Fluxo Alternativo A**

1. Usuário seleciona a opção "Grade Horaria".
2. Usuário seleciona um funcionário.
3. Sistema exibe calendário do funcionário.
4. O usuário preenche os dados com horários indisponíveis.
5. o sistema exibe a mensagem "horário indisponível" e retorna para tela inicial 

### CDU 13 - Visualizar agendamento 

#### Atores
- Administrador
- Funcionário
- Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Perfil"
2. O usuário seleciona a opção "agendamento"
3. O sistema apresenta todos os horários agendados por este perfil  

### CDU 14 - Recuperar Senha

#### Atores
- Administrador
- Funcionário
- Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Esqueceu sua senha".
2. O sistema abrirá uma página solicitando e-mail de recuperação.
3. O usuário digita o e-mail de recuperação e seleciona "Enviar código para recuperação".
4. O sistema envia o código de confirmação e o usuário o recebe em seu e-mail.
5. O sistema abrirá uma página solicitando código de recuperação.
6. O usuário digita o código de confirmação e seleciona "Prosseguir".
7. O sistema abrirá um Pop-up solicitando uma nova senha e uma confirmação da mesma.
8. O usuário digitará a senha desejada.
9. O sistema confere os dados inseridos e apresenta a mensagem "Senha Editada com Sucesso". 
