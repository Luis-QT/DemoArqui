<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserSpecification;
use App\OrderCopy;
use App\Order;
use App\Loan;

class PruebaCastigos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Se crea dos usuarios
    	$ana = User::create([
            'name' => 'Ana Maria',
            'lastName' => 'Huayna Dueñaz',
            'dni' => '69451348',
            'code' => '51243689',
            'instEmail' => 'anaHD@unmsm.edu.pe',
            'school_id' => 3,
            'userType_id'=>5,
            'state' => 0
        ]);
        UserSpecification::create([
            'phone' => '154687534',
            'cellPhone' => '87459687',
            'personalEmail' => 'HuaynaDueñas@gmail.com',
            'address' => 'Av. Dueñas',
            'description' => 'Es una de la profes mas hard',
            'urlImg'=> 'imagenAna',
            'password' => bcrypt('anita'),
            'user_id' => $ana->id,
        ]);

        $miller = User::create([
            'name' => 'Hugo Mario',
            'lastName' => 'Miller Mate',
            'dni' => '50451148',
            'code' => '57241984',
            'instEmail' => 'Miller@unmsm.edu.pe',
            'school_id' => 3,
            'userType_id'=>5,
            'state' => 0
        ]);
        UserSpecification::create([
            'phone' => '781415146',
            'cellPhone' => '154651877',
            'personalEmail' => 'HugoMiller@gmail.com',
            'address' => 'Av. Miller',
            'description' => 'Es una de los profes mas hard',
            'urlImg'=> 'imagenMiller',
            'password' => bcrypt('miller'),
            'user_id' => $miller->id,
        ]);

        //Se crea unos pedidos para ellos

	        $pedido1 =Order::create([
	        'user_id'=> $ana->id,
	        'startDateOrder'=> new DateTime("-1 years"),
	        'state'=> 1,
	        'cycle_id'=> 1,
	        'place'=> 1,
	      ]);

	      OrderCopy::create([
	        'material_id'=> 1,
	        'copyNumber'=> 1,
	        'materialType'=> 2,
	        'order_id'=> $pedido1->id,
	      ]);

	      $pedido2 =Order::create([
	        'user_id'=> $miller->id,
	        'startDateOrder'=> new DateTime("-1 years"),
	        'state'=> 1,
	        'cycle_id'=> 1,
	        'place'=> 1,
	      ]);

	      OrderCopy::create([
	        'material_id'=> 1,
	        'copyNumber'=> 1,
	        'materialType'=> 2,
	        'order_id'=> $pedido2->id,
	      ]);

	     //Se crea los prestamos
	      //Ana presenta un prestamo que aun no vence
	      $prestamo1 =Loan::create([
	        'startDateLoan' => new DateTime("-1 years"),
    	'endDateLoan'=> new DateTime("+5 months"),
        'state' => 0,
        'endDateLoanExt'=> new DateTime("+5 months"),
    	'order_id' => $pedido1->id
	      ]);

	      // Miller ya vencio hace rato
	      $prestamo2 =Loan::create([
	        'startDateLoan' => new DateTime("-1 years"),
    	'endDateLoan'=> new DateTime("-5 months"),
        'state' => 0,
        'endDateLoanExt'=> new DateTime("-5 months"),
    	'order_id' => $pedido2->id
	      ]);
    }
}
