<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('LocationTableSeeder');
		$this->call('DealerTableSeeder');
		$this->call('BranchTableSeeder');
	}
}

class RoleTableSeeder extends seeder {
	public function run(){
		DB::table('roles')->delete();
		DB::table('roles')->insert(array(
			 array('id' => 1,'title' => 'Administrator')
			,array('id' => 2,'title' => 'Moderator')
			,array('id' => 3,'title' => 'User')
		));
	}
}

class UserTableSeeder extends seeder {
	public function run(){
		DB::table('users')->delete();
		DB::table('users')->insert(array(
			 array(
			 	 'id' => 1
			 	,'role_id' => 1
			 	,'username' => 'admin'
			 	,'password' => Hash::make('password')
			 )
		));
	}
}


class DealerTableSeeder extends seeder {
	public function run(){
		DB::table('dealers')->delete();
		DB::table('dealers')->insert(array(
			 	 array("id"=>1,"name"=>"DIAMOND MOTOR CORPORATION")
				,array("id"=>2,"name"=>"DIAMOND GREENHILLS")
				,array("id"=>3,"name"=>"UNION MOTOR")
				,array("id"=>4,"name"=>"PEAK MOTORS")
				,array("id"=>5,"name"=>"CITIMOTORS,INC.")
				,array("id"=>6,"name"=>"CARWORLD, INC.")
				,array("id"=>7,"name"=>"CARWORLD SUBIC")
				,array("id"=>8,"name"=>"FREEWAY MOTORS BALIUAG")
				,array("id"=>9,"name"=>"FREEWAY MOTORS CABANATUAN")
				,array("id"=>10,"name"=>"MOTORPLAZA, INC.")
				,array("id"=>11,"name"=>"NORTHPOINT ALLIANCE MOTORS")
				,array("id"=>12,"name"=>"EVOLANDER MOTOR CORP.")
				,array("id"=>13,"name"=>"SFM SALES CORP.")
				,array("id"=>14,"name"=>"BEST SOUTHERN GENESIS")
				,array("id"=>15,"name"=>"JABEZ MOTOR ")
				,array("id"=>16,"name"=>"AMCAR AUTOMOTIVE CORP.")
				,array("id"=>17,"name"=>"CALEB MOTORS")
				,array("id"=>18,"name"=>"MAXIMOTORS CORP")
				,array("id"=>19,"name"=>"FAST AUTOWORLD PHILS. CORP")
				,array("id"=>20,"name"=>"AVESCOR MOTORS OF ILOILO")
				,array("id"=>21,"name"=>"AVESCOR MOTORS OF BACOLOD")
				,array("id"=>22,"name"=>"KARASIA, INC.")
				,array("id"=>23,"name"=>"MINDANAO INTEGRATED COMM'L ENT., INC. (MICEI)")
				,array("id"=>24,"name"=>"ZAMBOANGA MOTORS")
			 )
		);
	}
}

class LocationTableSeeder extends seeder {
	public function run(){
		DB::table('locations')->delete();
		DB::table('locations')->insert(array(
			 array('id'=>'MM','name'=>'Metro Manila')
			,array('id'=>'NL','name'=>'North Luzon')
			,array('id'=>'SL','name'=>'South Luzon')
			,array('id'=>'V','name'=>'Visayaz')
			,array('id'=>'M','name'=>'Mindanao')
		));
	}
}

class BranchTableSeeder extends seeder {
	public function run(){
		DB::table('branches')->delete();
		DB::table('branches')->insert(array(
			 array('location_id'=>"MM",'dealer_id'=>1,'code'=>"VDMC001",'name'=>"QUEZON AVENUE",'company'=>"Diamond Motor Corporation",'contact_person'=>"Mr. Edu Icasiano",'email'=>"edu.icasiano@diamondautogroup.ph")
			,array('location_id'=>"MM",'dealer_id'=>1,'code'=>"VDMC002",'name'=>"MARCOS HI-WAY",'company'=>"Diamond Motor Corporation",'contact_person'=>"Mr. Knel Vergel De Dios",'email'=>"knel.vergeldedios@diamondautogroup.ph")
			,array('location_id'=>"MM",'dealer_id'=>1,'code'=>"VDMC003",'name'=>"VALLE VERDE",'company'=>"Diamond Motor Corporation",'contact_person'=>"Ms. Vicky Flores",'email'=>"victoria.flores@diamondautogroup.ph")
			,array('location_id'=>"MM",'dealer_id'=>1,'code'=>"VDMC004",'name'=>"FAIRVIEW",'company'=>"Diamond Motor Corporation",'contact_person'=>"Mr. Dick Albao",'email'=>"dickalbao@yahoo.com")
			,array('location_id'=>"MM",'dealer_id'=>2,'code'=>"VDGI000",'name'=>"GREENHILLS",'company'=>"Diamond Motor Corporation",'contact_person'=>"Mr. Robert Gamboa",'email'=>"robert.gamboa@diamondautogroup.ph")
			,array('location_id'=>"MM",'dealer_id'=>3,'code'=>"VUMC000",'name'=>"PACO (Otis)",'company'=>"Union Motor Corporation",'contact_person'=>"Mr. James Castro",'email'=>"james.castro.68@yahoo.com")
			,array('location_id'=>"MM",'dealer_id'=>3,'code'=>"VUMC001",'name'=>"KALOOKAN",'company'=>"Union Motor Corporation",'contact_person'=>"Mr. Oso Alvarez",'email'=>"glorioso_alvarez@yahoo.com.ph")
			,array('location_id'=>"MM",'dealer_id'=>4,'code'=>"VPMP000",'name'=>"MANILA BAY",'company'=>"Peak Motors Philippines, Inc.",'contact_person'=>"Mr. Don Comia",'email'=>"doncomia@mitsubishi-manilabay.com.ph")
			,array('location_id'=>"MM",'dealer_id'=>4,'code'=>"VPMP001",'name'=>"ABAD SANTOS",'company'=>"Peak Motors Philippines, Inc.",'contact_person'=>"Mr. Garry Pineda",'email'=>"pinedagarrydexter@yahoo.com")
			,array('location_id'=>"MM",'dealer_id'=>5,'code'=>"VCTM000",'name'=>"MAKATI (Pasong Tamo)",'company'=>"Citimotors, Inc.",'contact_person'=>"Mr. Felix Espina",'email'=>"felixespina@citimotors.com")
			,array('location_id'=>"MM",'dealer_id'=>5,'code'=>"VCTL000",'name'=>"LAS PINAS",'company'=>"Citimotors, Inc.",'contact_person'=>"Mr. Anton Mabulay",'email'=>"antonmabulay@citimotors.com")
			,array('location_id'=>"MM",'dealer_id'=>5,'code'=>"VCTA000",'name'=>"ALABANG",'company'=>"Citimotors, Inc.",'contact_person'=>"Mr. Rey Garcia",'email'=>"reygarcia@citimotors.com")
			,array('location_id'=>"NL",'dealer_id'=>6,'code'=>"VCWI000",'name'=>"SAN FERNANDO",'company'=>"Carworld, Inc.",'contact_person'=>"Ms. Rose Alcazar",'email'=>"rcalcazar@mitsubishicarworld.com.ph")
			,array('location_id'=>"NL",'dealer_id'=>6,'code'=>"VCWI001",'name'=>"MARILAO",'company'=>"Carworld, Inc.",'contact_person'=>"Mr. Mel Alabado",'email'=>"cbalabado@lausgroup.com.ph")
			,array('location_id'=>"NL",'dealer_id'=>6,'code'=>"VCWI002",'name'=>"MALOLOS",'company'=>"Carworld Inc.",'contact_person'=>"Ms. Joan Oliquiano",'email'=>"jboliquiano@lausgroup.com.ph")
			,array('location_id'=>"NL",'dealer_id'=>6,'code'=>"VCWI003",'name'=>"TARLAC",'company'=>"Carworld, Inc.",'contact_person'=>"Mr. Edmund Basilio",'email'=>"edbasilio@lausgroup.com.ph")
			,array('location_id'=>"NL",'dealer_id'=>6,'code'=>"VCSI000",'name'=>"SUBIC",'company'=>"Carworld, Inc.",'contact_person'=>"Mr. Erwin Magat",'email'=>"epmagat@mitsubishicarworld.com.ph")
			,array('location_id'=>"NL",'dealer_id'=>8,'code'=>"VFMS001",'name'=>"BALIUAG",'company'=>"Freeway Motor Sales Corporation",'contact_person'=>"Mr. Josie Santos",'email'=>"jms060965@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>9,'code'=>"VFMS000",'name'=>"CABANATUAN",'company'=>"Freeway Motor Sales Corporation",'contact_person'=>"Mr. Dondi Lazaro",'email'=>"dondilazaro2004@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>9,'code'=>"VFMS002",'name'=>"ISABELA",'company'=>"Freeway Motor Sales Corporation",'contact_person'=>"Mr. Dondi Lazaro",'email'=>"dondilazaro2004@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>10,'code'=>"VMPI000",'name'=>"CALASIAO",'company'=>"Motorplaza, Inc.",'contact_person'=>"Ms. Jean Zulueta",'email'=>"motorplaza1@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>10,'code'=>"VMPI001",'name'=>"URDANETA",'company'=>"Motorplaza, Inc.",'contact_person'=>"Ms. Jean Zulueta",'email'=>"motorplaza1@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>10,'code'=>"VMPI002",'name'=>"BAGUIO",'company'=>"Motorplaza, Inc.",'contact_person'=>"Ms. Jean Zulueta",'email'=>"motorplaza1@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>10,'code'=>"VMPI003",'name'=>"LA UNION",'company'=>"Motorplaza, Inc.",'contact_person'=>"Ms. Jean Zulueta",'email'=>"motorplaza1@yahoo.com")
			,array('location_id'=>"NL",'dealer_id'=>11,'code'=>"VNAM000",'name'=>"LAOAG",'company'=>"Northpoint Alliance Motors Corporation",'contact_person'=>"Mr. Hanson Chua",'email'=>"chuajohanson@gmail.com")
			,array('location_id'=>"SL",'dealer_id'=>12,'code'=>"VEMC000",'name'=>"TAYTAY",'company'=>"Evolander Motor Corporation",'contact_person'=>"Mr. Noel De Leon",'email'=>"n-deleon@evolandermotorcorp.com")
			,array('location_id'=>"SL",'dealer_id'=>13,'code'=>"VSFM000",'name'=>"SAN PABLO",'company'=>"SFM Sales Corporation",'contact_person'=>"Ms. Hannah Biscocho",'email'=>"biscocho_chc@yahoo.com")
			,array('location_id'=>"SL",'dealer_id'=>13,'code'=>"VSFM001",'name'=>"LIPA CITY",'company'=>"SFM Sales Corporation",'contact_person'=>"Ms. Rowena Cruz",'email'=>"wcruz220@yahoo.com")
			,array('location_id'=>"SL",'dealer_id'=>14,'code'=>"VBES000",'name'=>"CALAMBA",'company'=>"Best Southern Genesis Motors, Inc.",'contact_person'=>"Mr. Christopher Bermudez",'email'=>"topsbermudez@MitsubishiCalamba.com")
			,array('location_id'=>"SL",'dealer_id'=>15,'code'=>"VJMC000",'name'=>"DASMARINAS",'company'=>"Jabez Motor Corporation",'contact_person'=>"Mr. Lito Valdez",'email'=>"ltvaldez06@yahoo.com")
			,array('location_id'=>"SL",'dealer_id'=>16,'code'=>"VAAC000",'name'=>"STA. ROSA",'company'=>"Amcar Automotive Corporation",'contact_person'=>"Mr. Jun Ventura",'email'=>"jun_ventura@amcar-automotive.com")
			,array('location_id'=>"SL",'dealer_id'=>17,'code'=>"VCMC000",'name'=>"NAGA",'company'=>"Caleb Motor Corporation",'contact_person'=>"Mr. Angela Janer",'email'=>"angela.janer@diamondautogroup.ph")
			,array('location_id'=>"SL",'dealer_id'=>18,'code'=>"VMAX000",'name'=>"PALAWAN",'company'=>"Maximotors Corporation",'contact_person'=>"Ms. Jonezza Jones",'email'=>"sales@maximotors.biz")
			,array('location_id'=>"V",'dealer_id'=>19,'code'=>"VMCC000",'name'=>"MANDAUE",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Mr. James Untal",'email'=>"james_untal@mmcc.com.ph")
			,array('location_id'=>"V",'dealer_id'=>19,'code'=>"VMCC001",'name'=>"DUMAGUETE",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Ms. Mia Mendez",'email'=>"mia_mendez@mmcc.com.ph")
			,array('location_id'=>"V",'dealer_id'=>19,'code'=>"VMCC002",'name'=>"TACLOBAN",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Mr. Romeo Go",'email'=>"rome_go@mmcc.com.ph")
			,array('location_id'=>"V",'dealer_id'=>19,'code'=>"VMCC003",'name'=>"TAGBILARAN",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Mr. Ondoy Dominese",'email'=>"ondoy_dominise@mmcc.com.ph")
			,array('location_id'=>"M",'dealer_id'=>19,'code'=>"VMCC004",'name'=>"CAGAYAN DE ORO",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Ms. Rhoda Tibayan",'email'=>"rhoda_tibayan@mmcc.com.ph")
			,array('location_id'=>"M",'dealer_id'=>19,'code'=>"VMCC005",'name'=>"BUTUAN",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Ms. Myla Nalcot",'email'=>"mylamarie@mmcc.com.ph")
			,array('location_id'=>"V",'dealer_id'=>19,'code'=>"VMCC006",'name'=>"CEBU SOUTH",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Mr. Ben Novo",'email'=>"ben_novo@mmcc.com.ph")
			,array('location_id'=>"M",'dealer_id'=>19,'code'=>"VMCC007",'name'=>"OZAMIZ",'company'=>"Fast Autoworld Philippines Corporation",'contact_person'=>"Mr. Phil Fabe",'email'=>"phil_fabe@mmcc.com.ph")
			,array('location_id'=>"V",'dealer_id'=>20,'code'=>"VAMI000",'name'=>"ILOILO",'company'=>"Avescor Motors, Inc.",'contact_person'=>"Mr. Joey Del Castillo",'email'=>"josemariadelcastillo@yahoo.com")
			,array('location_id'=>"V",'dealer_id'=>21,'code'=>"VAMB000",'name'=>"BACOLOD",'company'=>"Avescor Motors, Inc.",'contact_person'=>"Mr. Joey Del Castillo",'email'=>"josemariadelcastillo@yahoo.com")
			,array('location_id'=>"M",'dealer_id'=>22,'code'=>"VKAR001",'name'=>"BAJADA",'company'=>"Karasia, Inc",'contact_person'=>"Ms. Bianca Uy",'email'=>"uychristine05@yahoo.com")
			,array('location_id'=>"M",'dealer_id'=>22,'code'=>"VKAR002",'name'=>"TAGUM",'company'=>"Karasia, Inc",'contact_person'=>"Ms. Bianca Uy",'email'=>"uychristine05@yahoo.com")
			,array('location_id'=>"M",'dealer_id'=>23,'code'=>"VMIC000",'name'=>"GENERAL SANTOS CITY",'company'=>"Mindanao Integrated Commercial Enterprise, Inc.",'contact_person'=>"Mr. Jun Regollo",'email'=>"junregollo@yahoo.com")
 			,array('location_id'=>"M",'dealer_id'=>24,'code'=>"VZMI000",'name'=>"ZAMBOANGA",'company'=>"Zamboanga Motors, Inc.",'contact_person'=>"Mr. Vinnie Go",'email'=>"vinnie.go@gmail.com")
		)); 
	}
}