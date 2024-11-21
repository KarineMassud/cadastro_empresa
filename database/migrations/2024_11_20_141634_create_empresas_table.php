use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('estado');
            $table->string('numero_whatsapp');
            $table->string('cnpj');
            $table->foreignId('segmento_id')->constrained('segmentos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
