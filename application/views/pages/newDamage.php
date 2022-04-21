<h3><?=$this->lang->line('new_damage')?></h3>
<div class="ui divider"></div>

<div class="ui grid">
	<div class="six wide column">
	<?=form_open('ignite/addDamages', 'class="ui form"')?>
		<div class="field">
			<select name="item" class="ui dropdown search" onchange="igniteAjax.checkItem(this)" required>
				<option> -- Select Item -- </option>
				<?php foreach($items as $item): ?>
					<option value="<?=$item->itemId?>"><?=$item->codeNumber.' [ '.$item->itemName.' ] '.$item->price?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="field">
			<label><?=$this->lang->line('quantity')?></label>
			<?=form_number('qty', '', 'placeholder="Quantity" onchange="igniteAjax.balanceCheck(this)" id="dQty" data-qty="" required')?>
		</div>
	    
	    <div class="field">
	    	<label><?=$this->lang->line('remark')?> ( Optional )</label>
	    	<?=form_textarea('remark','','placeholder="'.$this->lang->line('remark').'"')?>
	    </div>
		<div class="field">
	        <?=anchor('damages',$this->lang->line('cancel'),'class="ui button"')?>
		    <?=form_submit('save',$this->lang->line('save'),'class="ui button blue"')?>
		</div>
	<?=form_close()?>
	</div>

	<div class="ten wide column">
		<div class="ui centered aligned itemDetail">
			
		</div>
	</div>
</div>