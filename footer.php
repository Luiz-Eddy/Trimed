		<footer>
			<div class="fleft">
        <p>Trimed Tecnologia &copy; 2019</p>
        <ul>
          <li><a href="index.php" id="pg">Página Inicial</a></li>
          <li><a href="medicamentos.php" id="rem">Medicamentos</a></li>
          <li><a href="farmacias.php" id="farm">Farmácias</a></li>
          <li><a href="analises.php" id="ana">Análises</a></li>
         <!--  <li><a href="cadastro.php" id="cad">Cadastre-se</a></li>
          <li><a href="login.php" id="login">Faça Login</a></li> -->
        </ul>
			</div>
      <div class="fmid">
        <span>
          Todas as informações contidas neste site têm a intenção de informar e educar, não pretendendo, de forma alguma, substituir as orientações de um profissional médico ou servir como recomendação para qualquer tipo de tratamento. Decisões relacionadas ao tratamento de pacientes devem ser tomadas por profissionais autorizados, considerando as características particulares de cada pessoa.
        </span>
      </div>
      <div class="fright">
        <p>
          <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS válido!" />
          </a>
        </p>
      </div>
		</footer>
	</div>
</div>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/datatables.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
  $(document).ready(function(){
      $('#farmacias').DataTable({
          "language": {
                "lengthMenu": "_MENU_ Registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
      $('#medicamentos').DataTable({
          "language": {
                "lengthMenu": "_MENU_ Registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
</script>
</body>
</html>