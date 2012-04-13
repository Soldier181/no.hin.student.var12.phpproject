<?php
interface IdataLager{
	/**
	 * Lagre et enkelt innlegg
	 * @param $innlegg lagrer alle 
	 */
	public function lagreInnlegg($innlegg);
	/**
	 * Returnerer et array med alle Innlegg
	 * @return Innlegg[] 
	 */
	public function hentAlleInnlegg();
	/**
	 * 
	 * Enter description here ...
	 * @param String $tagg
	 * @return Innlegg[] returnerer et array med alle Innlegg som inneholder gitt tag
	 */
	public function hentInnleggMedTagg($tagg);
}