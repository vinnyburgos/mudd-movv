<div class="wrapRespostaModal" id="wrapRespostaModal">
	<div class="innerRespostaModal">
		<div id="closeRespostaModal">X</div>
		<div class="tickModal"><svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 512 512"><style>svg{fill:#f8923d}</style><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg></div>
		<h2>Sucesso!</h2>
		<p class="conteudoRespostaModal">
			<b>Muito obrigado por realizar seu cadastro,</b> em alguns instantes entraremos em contato!
		</p>	
	</div>
</div>


<style>
	.wrapRespostaModal {
		position: fixed;
		display: none;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		text-align: center;
		background: rgba(0, 0, 0, .8);
		z-index: 999999999;
	}
	.innerRespostaModal {
		position: relative;
		width: 300px;
		max-width: 95%;
		margin: 8% auto;
		padding: 36px;
		border-radius: 20px;
		background-color: #fff;
		cursor: pointer;
	}
	#closeRespostaModal {
		position: absolute;
		right: 20px;
		font-size: 30px;
		top: 10px;
		font-weight: 600;
		transition: all .4s;
	}
	#closeRespostaModal:hover {
		opacity: .8;
		transition: all .4s;
	}
	.tickModal {
		position: relative;
		margin-bottom: -20px;
	}
</style>

<script>
	document.querySelector("#closeRespostaModal").addEventListener("click", function(){
		document.querySelector("#wrapRespostaModal").style.display = "none";
	});
</script>