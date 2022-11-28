# Documento de Casos de Uso

## Lista dos Casos de Uso 2

 - [CDU 01](#CDU-1---Fazer-login): Fazer login.
 - [CDU 02](#CDU-2---Fazer-logout): Fazer logout.  
 - [CDU 03](#CDU-3---Realizar-agendamento): Realizar gendamento.
 - [CDU 04](#CDU-4---Editar-agendamento): Editar agendamento.
 - [CDU 05](#CDU-5---Cancelar-agendamento): Cancelar agendamento.
 - [CDU 06](#CDU-6---Visualizar-os-clientes-agendados): Visualizar os clientes agendados.
 - [CDU 07](#CDU-7---Cadastrar-funcionários): Cadastrar funcionários.
 - [CDU 08](#CDU-8---Cadastrar-usuário): Cadastrar usuário.
 - [CDU 09](#CDU-9---Editar-Cadastro-de-usuário): Editar Cadastro de usuário.
 - [CDU 010](#CDU-10---Listar-Cadastro-de-usuário): Listar Cadastro de usuário.
 - [CDU 011](#CDU-11---Adicionar-serviço): Adicionar serviço.
 - [CDU 012](#CDU-12---Editar-serviço): Editar serviço.
 - [CDU 013](#CDU-13---Listar-serviços): Listar serviços.


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

1. O usuário seleciona a opção "Login".
2. O sistema solicita ao usuário os dados necessários para login.
3. O usuário fornece os dados e confirma a operação.
5. O sistema verifica as informações fornecidas pelo usuário.
6. O sistema faz o login do usuário.
7. O usuário é redirecionado para a tela de perfil.

![Diagrama de Casos de Uso](Diagramas/Diagramas%20de%20Sequ%C3%AAncia/CDU%201%20-%20Fazer%20Login(Fluxo%20Principal).pngc)


**Fluxo Alternativo A**

1. O usuário seleciona a opção "Login"
2. O sistema solicita ao usuário os dados necessários para login.
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica as informações fornecidas pelo usuário e apresenta a mensagem "login ou senha inválidos, tente novamente".

**Fluxo Alternativo B**

1. O usuário seleciona a opção "Login"
2. O sistema solicita ao usuário os dados necessários para login.
3. O Usuário cancela o login pressionando o botão "cancelar".
4. O usuário é redirecionado para a tela de principal.

### CDU 2 - Fazer logout

#### Atores
- Administrador
- Funcionário
- Cliente
 
**Fluxo Principal**

1. O usuário seleciona a opção "Logout"
2. O programa apresenta um pop UP com "tem certeza que deseja fazer logout?" e "sim" e "não".
3. O usuário aperta o botão "sim".
4. O sistema desloga o usuário.
5. O pop-up fecha e o usuário é redirecionado para a página principal.

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Logout"
2. O programa apresenta um pop UP com "tem certeza que deseja fazer logout?" e "sim" e "não".
3. O usuário aperta o botão "não".


### CDU 3 - Realizar Agendamento

#### Atores
- Cliente
 
**Fluxo Principal**

1. O usuário seleciona opção "Realizar Agendamento". 
2. O sistema solicita os dados necessários para o realizar um agendamento.
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica os dados e mostra uma mensagem de confirmação.

**Fluxo Alternativo A**

1. O usuário seleciona opção "Realizar Agendamento".
2. O sistema solicita os dados necessários para o realizar agendamento um cliente.
3. O usuário não fornece todos os dados necessários e confirma a operação
4. O sistema apresenta a mensagem "Favor preencher todos os dados corretamente.

### CDU 4 - Editar agendamentos

#### Atores
 - Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Editar Agendamento". 
2. O sistema verificará se falta mais de 24h para a horário agendado. 
3. Caso positivo, o sistema abrirá uma página com dados editáveis de seu agendamento.
4. O usuário insere os dados desejados para modificação e seleciona o botão "Confirmar".
5. O sistema confere os dados inseridos e apresenta a mensagem "Agendamento Editado com Sucesso".

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Editar Agendamento". 
2. O sistema verificará se falta mais de 24h para a horário agendado. 
3. Caso positivo, o sistema abrirá uma tela com dados editáveis de seu agendamento.
4. O usuário seleciona o botão "Excluir Agendamento".
5. O sistema exclui o agendamento e retorna uma mensagem de confirmação.

**Fluxo Alternativo B**

1. O usuário seleciona a opção "Editar Agendamento". 
2. O sistema verificará se falta mais de 24h para a horário agendado.
3. Caso Negativo, o sistema bloqueará o acesso do usuário a edição de agendamento.


### CDU 6 - Listar Agendamentos

#### Atores
 - Administrador
 - Funcionário

**Fluxo Principal**

1. O usuário seleciona a opção "Listar agendamentos"
3. O sistema apresentará uma lista com todos os agendamentos realizados.

### CDU 7 - Cadastrar funcionário

#### Atores
 - Administrador
 
**Fluxo Principal**

1. O usuário seleciona a opção "Cadastrar Funcionário"
2. O sistema solicita os dados necessários para o cadastro de um funcionário. 
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica se todos os dados foram fornecidos corretamente e em seguida mostra uma mensagem de confirmação.

**Fluxo Alternativo A** 

1. O usuário seleciona a opção "Cadastrar Funcionário".
2. O usuário seleciona o botão "Cancelar".
3. O usuário é redirecionado para a tela de perfil.


### CDU 8 - Cadastrar cliente

#### Atores
 - Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Fazer Cadastro".
2. O sistema solicita os dados necessários para o cadastro. 
3. O usuário fornece os dados e confirma a operação.
4. O sistema verifica se todos foram fornecidos e em seguida mostra uma mensagem de confirmação.

**Fluxo Alternativo A** 

1. O usuário seleciona a opção fazer cadastro.
2. O Usuário cancela a realização do cadastro pressionando um botão "cancelar", exibido na tela.
3. O usuário é redirecionado para a tela de perfil.

### CDU 9 - Editar Cadastro de usuário

#### Atores
- Administrador
- Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Editar Cadastro".
2. O sistema abrirá uma página com dados editáveis de seu cadastro.
3. O usuário edita os dados desejados e seleciona "Confirmar".
4. O sistema confere os dados inseridos e apresenta a mensagem "Cadastro Editado com Sucesso".

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Editar cadastro".
2. O sistema abrirá uma página com dados editáveis de seu cadastro.
3. O usuário seleciona o botão "Excluir".
5. O sistema exclui o cadastro e retorna uma mensagem de confirmação.


### CDU 10 - Listar Cadastro de usuário

#### Atores
-Administrador

**Fluxo Principal**

1. O usuário seleciona a opção listar usuarios.
2. O sistema apresenta uma lista de usuarios cadastrados.

### CDU 11 - Adicionar serviço

#### Atores
-Administrador

**Fluxo Principal**


1. O usuário seleciona a opção "Adicionar Serviço".
2. O sistema requisita os dados necessários para adicionar um serviço.
4. O usuário preenche os dados com os dados necessários.
5. O serviço é armazenado e o sistema exibe uma mensagem de confirmaçao.

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Adicionar Serviço".
2. O sistema requisita os dados necessários para adicionar um serviço.
3. O usuário seleciona a opção "Cancelar"

### CDU 12 - Editar serviço

#### Atores
-Administrador

**Fluxo Principal**

1. O usuário seleciona a opção "Editar Serviço"
2. O sistema abrirá uma página com dados editáveis do serviço.
3. O usuário edita os dados desejados e seleciona "Confirmar".
4. O sistema confere os dados inseridos e apresenta a mensagem "Serviço Editado com Sucesso". 

**Fluxo Alternativo A**

2. O usuário seleciona a opção "Editar Serviço"
4. O sistema abrirá uma página com dados editáveis do serviço.
5. O usuário seleciona a opção "Excluir"
6. O sistema exclui o serviço e retorna uma mensagem de confirmação.
7. 
**Fluxo Alternativo B**

1. O usuário seleciona a opção "Editar Serviço"
2. O sistema abrirá uma página com dados editáveis do serviço
4. O usuário seleciona a opção "Cancelar"

### CDU 13 - Listar serviços

#### Atores
-Administrador

*Fluxo Principal*

1. O usuário seleciona a opção listar serviços
2. O sistema apresenta uma lista de serviços

### CDU 14 - Disponibilizar horário

#### Atores
-Administrador

**Fluxo Principal**

1.Usuário seleciona a opção "Grande Horaria".
2.Usuário seleciona um funcionário.
3.Sistema exibe calendário do funcionário.
4.O usuário preenche os dados com os dados necessários.
5.O Horário é armazenado e o sistema exibe uma mensagem de confirmação


### CDU 14 - Disponibilizar horário

#### Atores
- Administrador

**Fluxo Principal**

1.Usuário seleciona a opção "Grande Horaria".
2.Usuário seleciona um funcionário.
3.Sistema exibe calendário do funcionário.
4.O usuário preenche os dados com os dados necessários.
5.O Horário é armazenado e o sistema exibe uma mensagem de confirmação

**Fluxo Alternativo B**

1.Usuário seleciona a opção "Grande Horaria".
2.Usuário seleciona um funcionário.
3.Sistema exibe calendário do funcionário.
4.O usuário preenche os dados com horários indisponíveis.
5.o sistema exibe a mensagem "horário indisponível" e retorna para tela inicial 

### CDU 15 - Visualizar agendamento 

#### Atores
- Administrador
- Funcionário
- Cliente

**Fluxo Principal**

1. O usuário seleciona a opção "Perfil"
2. O usuário seleciona a opção "agendamento"
3. O sistema apresenta todos os horários agendados por este perfil  



