<?php
	require_once '../../config.php';
	Authenticator::requireLogin();
?>

<button type="button" class="btn btn-outline-secondary mb-3" id="toggleFilters">Exibir filtros</button>
<button type="button" class="btn btn-outline-primary text-right ml-3 mb-3" id="registerUser">Cadastrar usuário</button>
<form id="filters" style="display:none;" action="javascript:void(0);">
	<h4>Filtrar resultados</h4>
	<div class="row">
		<div class="col-2">
			<div class="form-group">
				<label for="filterUserName">Nome de usuário</label>
				<input type="text" class="form-control" id="filterUserName">
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				<label for="filterName">Nome</label>
				<input type="text" class="form-control" id="filterName">
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				<label for="filterAccessLevel">Nível de acesso</label>
				<select multiple class="form-control" id="filterAccessLevel">
					<option value="0">Convidado</option>
					<option value="1">Gestor</option>
					<option value="2">Administrador</option>
				</select>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<button type="button" class="btn btn-success" id="search" style="margin-top: 34px;">
					Filtrar&ensp;
					<i class="fas fa-filter"></i>
				</button>
				<button type="button" class="btn btn-primary ml-3" id="clearFilters" style="margin-top: 34px;">
					Limpar filtros&ensp;
					<i class="fas fa-eraser"></i>
				</button>
			</div>
		</div>
	</div>
</form>
<hr class="mb-5">

<h3>Usuários cadastrados</h3>
<span id="resultSearch"></span>
<table class="table table-hover table-light mt-3" id="listUsers">
	<thead>
		<tr>
			<th scope="col">Username</th>
			<th scope="col">Nome</th>
			<th scope="col">Nível de acesso</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody id="listUsersContent"></tbody>
</table>

<script type="text/javascript" src="View/Scripts/Users.js"></script>