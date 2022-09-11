# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Usuário tenta acessar a página de Perfil.
 - [CDU 02](#CDU-02): Usuário tenta acessar a página de Agendamento.
 - [CDU 03](#CDU-03): Usuário tenta acessar a página de Login.


## Lista dos Atores

 - Administrador
 - Funcionário
 - Cliente 

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01

#### Atores
 - Administrador
 - Funcionário
 - Cliente 

Usuário tenta acessar a página de Perfil.

**Fluxo Principal**

1. Usuário seleciona o botão perfil.
2. Usuário é redirecionado para área de perfil.

**Fluxo Alternativo A**

1. Usuário seleciona o botão perfil.
2. Usuário vai para área de login pois não esta logado no sistema.

### CDU 02

#### Atores
 - Administrador
 - Funcionário
 - Cliente 

Usuário tenta acessar a página de Agendamento.

**Fluxo Principal**

1. Usuário seleciona o botão agendamento.
2. Usuário é redirecionado para área agendamento.

**Fluxo Alternativo A**

1. Usuário seleciona o botão agendamento.
2. Usuário é redirecionado para área de login pois não está logado no sistema.

### CDU 03

#### Atores
 - Administrador
 - Funcionário
 - Cliente 

Usuário tenta acessar a página de Login.

**Fluxo Principal**

1. Usuário aperta a o botão Login.
2. Usuário é redirecionado para a página de "login".

**Fluxo Alternativo A**

1. Usuário aperta o botão "login".
2. Usuário já está logado, então é redirecionado para página principal.

### CDU 4

#### Atores
- Administrador
- Funcionário
- Cliente 

Usuário tenta fazer login.

**Fluxo Principal**

1. O sistema solicita ao usuário nome de usuário e senha de acesso.
2. O Usuário digita o nome e senha em seus respectivos espaços.
3. O usuário confirma clicando no botão "enviar".
4. O sistema verifica as informações fornecidas pelo usuário.
5. Se as informações fornecidas pelo usuário corresponderem a um login existente, o sistema permite a entrada do usuário.

**Fluxo Alternativo A**

1. O sistema solicita ao cliente ao usuário nome de identificação e senha de acesso.
2. O Usuário digita nome ou senha inválidos.
3. O sistema apresenta a frase "login ou senha inválidos, tente novamente".

**Fluxo Alternativo B**

1. O sistema solicita ao cliente ao usuário nome de identificação e senha de acesso.
2. O Usuário cancela a realização do login pressionando um botão "cancelar", exibido na tela.
3. O usuário é redirecionado para a tela de menu.

### CDU 5

#### Atores
- Administrador
- Funcionário
- Cliente
 
Usuário tenta fazer logout

**Fluxo Principal**

1. O usuário aperta o botão "logout"
2. O programa apresenta um pop UP escrito "tem certeza que deseja fazer logout?" Com duas opções "sim" e "não".
3. O usuário aperta o botão "sim".
4. O usuário é redirecionado para a opção de fazer login.

**Fluxo Alternativo A**

1. o usuário aperta o botão  "logout".
2. O programa apresenta um pop UP escrito "tem certeza que deseja fazer logout?" Com duas opções "sim" e "não".
3. O usuário aperta o botão "não".
4. O usuário retorna para a grade de horários.

### CDU 6

#### Atores
 -Cliente
 
-O usuario tenta agendar no sistema.

**Fluxo Principal**

1. O usuário seleciona a opção "Agendamento" no menu principal.
2. O usuário seleciona opção "cadastrar Agendamento". 
3. O sistema solicita os dados necessários para o agendamento do cliente.
4. O usuário fornece os dados e confirma a operação.
5. O sistema verifica se todos os dados foram fornecidos e em seguida mostra uma mensagem de confirmação.

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Agendamento" no menu principal.
2. O usuário seleciona opção "cadastrar Agendamento".
3. O sistema solicita os dados necessários para o agendamento do cliente.
4. O usuário não fornece todos os dados necessários.
5. O sistema apresenta a mensagem "Favor preencher todos os dados corretamente.

### CDU 7

#### Atores
 - Administrador
 - Cliente

Usuario tenta excluir agendamento

**Fluxo Principal**

1. O usuário seleciona a opção "Agendamento" no menu principal.
2. O usuário seleciona a opção Excluir Agendamento. 
3. O sistema solicita o código do agendamento a ser excluído.
4. O usuário fornece o código e confirma a operação.
5. O sistema verifica se o código de agendamento existe.
6. O sistema exclui o agendamento e em seguida mostra a mensagem "agendamento excluído".

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Agendamento" no menu principal.
2. O usuário seleciona a opção Excluir Agendamento. 
3. O sistema solicita o código do agendamento a ser excluído.
4. O usuário fornece um código errado e confirma a operação.
5. O sistema verifica que o código está errado. 
6. O sistema apresenta na tela a mensagem "Código de agendamento não reconhecido".
7. O sistema redireciona o usuário para o caso de uso 3 do fluxo principal.

### CDU 8

#### Atores
 - Administrador
 - Funcionário

Usuário tenta visualizar os clientes agendados.

**Fluxo Principal**

1. O usuário abre a aba de agendamento. 
2. O usuário seleciona a opção visualizar agendamentos.
3. O sistema apresenta todos os horários que clientes estão agendados. 

**Fluxo Alternativo A**

1. O usuário abre a aba de agendamento. 
2. O usuário aperta a opção Cancelar.
3. O sistema redireciona o usuário para a tela de menu.

### CDU 

#### Atores
 - 
 - 
 - 

-

**Fluxo Principal**

1. 
2. 
3. 
4.
5.

**Fluxo Alternativo A**

1. 
2. 
3. 
4. 
5.

### CDU 0

#### Atores
 - 
 - 
 - 

-

**Fluxo Principal**

1. 
2. 
3. 
4.
5.

**Fluxo Alternativo A**

1. 
2. 
3. 
4. 
5.

### CDU 0

#### Atores
 - 
 - 
 - 

-

**Fluxo Principal**

1. 
2. 
3. 
4.
5.

**Fluxo Alternativo A**

1. 
2. 
3. 
4. 
5.
