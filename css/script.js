function teste() {
	
//	var saindo = window.document.getElementById('saindo')
//	var consulta = window.document.getElementById('consulta')
//	var estoque = window.document.getElementById('estoque')
//	var cadastro = window.document.getElementById('cadastro')
//	var relatorio = window.document.getElementById('relatorio')
	var gravar = window.document.getElementById('gravar')
	
//	saindo.addEventListener('mouseenter', entrar)
//	saindo.addEventListener('mouseout', sair)
//	consulta.addEventListener('mouseenter', entrar)
//	consulta.addEventListener('mouseout', sair)
//	estoque.addEventListener('mouseenter', entrar)
//	estoque.addEventListener('mouseout', sair)
//	cadastro.addEventListener('mouseenter', entrar)
//	cadastro.addEventListener('mouseout', sair)
//	relatorio.addEventListener('mouseenter', entrar)
//	relatorio.addEventListener('mouseout', sair)
	gravar.addEventListener('mouseenter', entrar)
	gravar.addEventListener('mouseout', sair)
	
	function entrar(){
//	        saindo.style.background = '#FFDAB9';
//	        consulta.style.background = '#FFDAB9';
//	        estoque.style.background = '#FFDAB9';
//	        cadastro.style.background = '#FFDAB9';
//	        relatorio.style.background = '#FFDAB9';
		gravar.style.background = '#00FF7F';
	}
	function sair(){
//        	saindo.style.background = '#F8F8FF';
//        	consulta.style.background = '#F8F8FF';
//        	estoque.style.background = '#F8F8FF';
//        	cadastro.style.background = '#F8F8FF';
//        	relatorio.style.background = '#F8F8FF';
	        gravar.style.background = '#F8F8FF';
    	}

}
