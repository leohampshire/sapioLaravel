<?php

namespace Tests\Unit;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

class TemporadaTest extends TestCase
{
    /**
     * @var Temporada
     */
    private $temporada;

    public function setUp(): void
    {
        parent::setUp();

        $temporada = new Temporada();
        $episodio1 = new Episodio();
        $episodio1->assistido = true;
        $episodio2 = new Episodio();
        $episodio2->assistido = false;
        $episodio3 = new Episodio();
        $episodio3->assistido = true;
        $temporada->getEpisodios->add($episodio1);
        $temporada->getEpisodios->add($episodio2);
        $temporada->getEpisodios->add($episodio3);
        $temporada->getEpisodiosAssistidos();

        $this->temporada = $temporada;
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $episodiosAssistidos = $this->temporada->getEpisodiosAssistidos();
        $this->assertCount(2, $episodiosAssistidos);
        foreach ($episodiosAssistidos as $episodio) {
            $this->assertTrue($episodio->assistido);
        }
    }

    public function testBuscaTodosOsEpisodios()
    {
        $episodios = $this->temporada->episodios;
        $this->assertCount(3, $episodios);
    }
}
