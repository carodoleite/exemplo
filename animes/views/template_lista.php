<div class="container">
    	<?php
    	for ($linha=0; $linha<$numero_linhas; $linha++):
    		$quant_animes_prox = $linha*$numero_colunas+$numero_colunas;
    		if($quant_animes < $quant_animes_prox){
    			$num_colunas_exibir = $quant_animes%$numero_colunas;
    		}
    	?>
		    <div class="row">
				<?php
				for($coluna=0; $coluna<$num_colunas_exibir; $coluna++):
					$posicao_anime = $linha*$numero_colunas+$coluna;
				?>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				    	<img src="<?php echo $animes[$posicao_anime]->getEnderecoImagem()?>" width="280px" height="170px" alt="Sem Imagem">
					    <div class="caption">
					    	<h3><?php echo $animes[$posicao_anime]->getTitulo(); ?></h3>
					        <p><?php echo $animes[$posicao_anime]->getDescricao(); ?></p>
					    </div>
				    </div>
				  </div>
				<?php endfor;?>
			</div>
		<?php endfor;?>
</div>
