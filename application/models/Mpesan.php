<?php
class Mpesan extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function process($userID,$phone,$tanggal) {
        $bayar = $this->cart->total();
        $order_id = mt_rand(1,99999);//
        $order = array(
        	'ID' => $order_id,
            'user' => $userID,
            'phone'=> $phone,
            'date' => date('Y-m-d H:i:s'),
            'tanggalambil'=>$tanggal,
            'total' => $bayar,
            'status' => 'On Progress'
        );
        $this->db->insert('order', $order);
        $this->db->where('ID', $order_id);
        foreach($this->cart->contents() as $item) {
            $data = array(
                'orderid' => $order_id,
                'kodeproduct' => $item['id'],
                'harga' => $item['price'],
                'jumlah' => $item['qty']
            );
            $this->db->insert('detailorder', $data);
        }
        return TRUE;
    }


}
?>