<?php

namespace App\Models\mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    protected $order;

    /**
     * Create a new message instance.
     *
     * @param  Order  $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com', 'Example')
            ->view('emails.orders.shipped');
        /*return $this->view('emails.orders.shipped')
            ->with([
                'orderName' => $this->order->name,
                'orderPrice' => $this->order->price,
            ]);*/
    }
}
