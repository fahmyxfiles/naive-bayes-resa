<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Biobii\NaiveBayes;

class WebController extends Controller
{
    public function showForm()
    {
        return view('naivebayesform');
    }

    public function handleSubmit(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $text = $request->input('text');

        $result = $this->classify($text);

        return view('naivebayesresult', ['result' => $result, 'text' => $text]);
    }

    public function parse_csv($filePath)
    {
        $data = [];
    
        // Open the file in read mode
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Get the first row to check if it's a header row
            $header = fgetcsv($handle);
    
            // Get the index of the columns we are interested in
            $fullTextIndex = array_search('full_text', $header);
            $klasifikasiIndex = array_search('klasifikasi', $header);
    
            // Check if the necessary columns exist
            if ($fullTextIndex === false || $klasifikasiIndex === false) {
                fclose($handle);
                throw new Exception('CSV does not contain required columns');
            }
    
            // Read the remaining rows
            while (($row = fgetcsv($handle)) !== false) {
                $fullText = $row[$fullTextIndex];
                $klasifikasi = $row[$klasifikasiIndex];
                if($klasifikasi !== "Netral"){
                    $data[] = [
                        'text' => $fullText,
                        'class' => $klasifikasi
                    ];
                }
            }
    
            // Close the file
            fclose($handle);
        } else {
            throw new Exception('Unable to open the CSV file');
        }
    
        return $data;
    }

    public function classify($text){
        $nb = new NaiveBayes();

        $nb->setClass(['Positif', 'Negatif']);

        $filePath = public_path('data.csv');
        $data = $this->parse_csv($filePath);

        $nb->training($data);

        $hasil = null;

        try {
            $hasil = $nb->predict($text);
        }
        catch(\Exception $e){
            $hasil = "Konteks tidak sesuai";
        }
        return $hasil;

    }
}