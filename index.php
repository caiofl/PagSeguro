<!doctype html>
<html lang="pt-br">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>

  <body class="bg-light">
    <div class="container">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Endereço de cobrança</h4>
          <form class="needs-validation" method="post" action="adesao_plano.php" novalidate>
            <div class="row">
              <div class="col-md-9 mb-3">
                <label for=name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="birthDate">Data de Nascimento</label>
                <input type="text" class="form-control" id="birthDate" name="birthDate" placeholder="00/00/0000" required>
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="CPF">CPF</label>
                <input type="text" class="form-control" id="CPF" name="CPF" value data-title="CPF" maxlength="14" autocomplete="off" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um CPF válido.
                </div>
            </div>
              <div class="col-md-2 mb-3">
                <label for="areaCode">DDD</label>
                <input type="text" class="form-control" id="areaCode" name="areaCode" maxlength="3" placeholder="11" required>
                <div class="invalid-feedback">
                  DDD inválido.
                </div>
              </div> 
              <div class="col-md-4 mb-3">
                <label for="telNumber">Celular</label>
                <input type="text" class="form-control" id="telNumber" name="telNumber"  maxlength="9" placeholder="977003000" required>
                <div class="invalid-feedback">
                  Tefelone inválido.
                </div>
              </div> 
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@sandbox.pagseguro.com.br" required>
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

          <div class="row">
            <div class="col-md-10 mb-3">
              <label for="street">Endereço</label>
              <input type="text" class="form-control" id="street" name="street" placeholder="Rua, " required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="casaNumber">Numero</label>
              <input type="text" class="form-control" id="casaNumber" name="casaNumber" placeholder="N°" >
              <div class="invalid-feedback">
              </div>
            </div>
            
            <div class="col-md-6 mb-3">
              <label for="city">Cidade</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="" required>
              <div class="invalid-feedback">
                  Cidade obrigatória.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="district">Bairro</label>
              <input type="text" class="form-control" id="district" name="district" placeholder="" required>
              <div class="invalid-feedback">
                  Cidade obrigatória.
              </div>
            </div>
            
            <div class="col-md-6 mb-3">
              <label for="complement">Complemento <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="complement" name="complement" placeholder="Apartamento ou casa">
            </div>

            <div class="col-md-6 mb-3">
                <label for="postalCode">Cep</label>
                <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>

            <div class="col-md-2 mb-3">
                <label for="estado">Estado</label>
                <select class="custom-select d-block w-100" id="state" name="state" required>
                  <option value=""></option>
                  <option>AC</option>
                  <option>AL</option>
                  <option>AP</option>
                  <option>AM</option>
                  <option>BA</option>
                  <option>CE</option>
                  <option>DF</option>
                  <option>ES</option>
                  <option>GO</option>
                  <option>MA</option>
                  <option>MT</option>
                  <option>MS</option>
                  <option>MG</option>
                  <option>PA</option>
                  <option>PB</option>
                  <option>PR</option>
                  <option>PE</option>
                  <option>PI</option>
                  <option>RJ</option>
                  <option>RN</option>
                  <option>RS</option>
                  <option>RO</option>
                  <option>RR</option>
                  <option>SC</option>
                  <option>SP</option>
                  <option>SE</option>
                  <option>TO</option>                  
                </select>

              <div class="col-md-12 mb-3">
                <label for="country">País</label>
                <select class="custom-select d-block w-100" id="country" name="country" required>
                  <option value="">Escolha...</option>
                  <option>BRA</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, escolha um país válido.
                </div>
              </div>
              
                <div class="invalid-feedback">
                  Por favor, insira um estado válido.
                </div>
              </div>
          </div>
             
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credito">Cartão de crédito</label>
              </div>
            </div>
            <div class="row">
            <div class="col-md-9 mb-3">
                <label for="cardNumber">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="" required>
                <div class="invalid-feedback">
                  O número do cartão de crédito é obrigatório.
                </div>
              </div>

            <div class="col-md-3 mb-3">
                <label for="cardCvv">CVV</label>
                <input type="text" class="form-control" id="cardCvv" name="cardCvv" placeholder="" required>
                <div class="invalid-feedback">
                  Código de segurança é obrigatório.
                </div>
            </div> 
            <div class="col-md-8 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-nome" name="cc-nome" placeholder="" required>
                <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                <div class="invalid-feedback">
                  O nome que está no cartão é obrigatório.
                </div>
              </div>
            <div class="col-md-2 mb-3">
                <label for="cardExpirationMonth">Vencimento</label>
                <input type="text" class="form-control" id="cardExpirationMonth" name="cardExpirationMonth" placeholder="MM" required>
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="cardExpirationYear"></label>
                <input type="text" class="form-control" id="cardExpirationYear" name="cardExpirationYear" placeholder="AAAA" maxlength="4" required>
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
            </div>
            
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar pagamento</button>
          </form>
        </div>
      </div>

    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
