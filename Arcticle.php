<?php
	/**
	 * @Entity
	 * @Table (name="adresse")
	*/
	class Adresses
	{	
		/** 
			*@Id 
			*@Column(type="integer")
			*@GeneratedValue
		*/
		private $adresseid;

		/** @Column(type="string", length = 150) **/
		private $quartier;

		/** @Column (type= "string", length = 150) **/
		private $ville;

		//Getters
		public function getAdresseid() {return $this->adresseid;}
		public function getQuartier() {return $this->quartier;}
		public function getVille() {return $this->ville;}

		//Setters
		public function setAddresseid($addresseid) {
			$adresseid = (int) $adresseid;		
			if ($adresseid > 0){ $this->adresseid = $adresseid;}
		}

		public function setQuartier($quartier) {
			if (is_string($quartier)){$this->quartier = $quartier;}
		}

		public function setVille($ville) {
			if (is_string($ville)){$this->ville = $ville;}
		}		

	}

	//generation de soap
	$soap = new SoapServer('article.wsdl', 'http://127.0.0.1/~Webservice-SOAP/article.wsdl');
	$soap->setClass('Adresses');
	$soap->handle();
	


?>