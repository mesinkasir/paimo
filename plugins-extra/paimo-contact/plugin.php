<?php

class pluginPaimoContact extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'label'=>'Contact',
			'text'=>''
		);
	}

	public function form()
	{
		global $L;

		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= $this->description();
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Label').'</label>';
		$html .= '<input name="label" type="text" value="'.$this->getValue('label').'">';
		$html .= '<span class="tip">'.$L->get('You company name').'</span>';
		$html .= '</div>';		
		
		$html .= '<div>';
		$html .= '<label>'.$L->get('Paimo Contact').'</label>';
		$html .= '<textarea name="text" id="jstext">'.$this->getValue('text').'</textarea>';
		$html .= '<span class="tip">'.$L->get('Input your address detail in here').'</span>';
		$html .= '</div>';

		return $html;
	}

	public function siteSidebar()
	{
		$html  = '<div class=" col-md-12 p-3 plugin plugin-paimo-contact text-center">';
		$html .= '<h3><strong>'.$this->getValue('label').'</strong></h3>';
		$html .= '<div class="plugin-content">';
		$html .= html_entity_decode(nl2br($this->getValue('text')));
 		$html .= '</div>';
 		$html .= '</div>';

		return $html;
	}
}