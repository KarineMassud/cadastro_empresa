namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'rua',
        'numero',
        'bairro',
        'estado',
        'numero_whatsapp',
        'cnpj',
        'segmento_id',
    ];
}
