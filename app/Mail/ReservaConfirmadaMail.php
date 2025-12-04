public $reserva;
public $qr;

public function __construct($reserva, $qr)
{
    $this->reserva = $reserva;
    $this->qr = $qr;
}

public function build()
{
    return $this->subject('Tu Reserva en Mil Heridas')
                ->view('emails.reserva-confirmada')
                ->with([
                    'reserva' => $this->reserva,
                    'qr' => $this->qr,
                ]);
}
