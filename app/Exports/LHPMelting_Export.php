<?php

namespace App\Exports;

use App\Models\LhpMelting;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class LHPMelting_Export implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    use Exportable;

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    function __construct($mesin, $mulai, $selesai)
    {
        $this->mesin = $mesin;
        $this->mulai = $mulai;
        $this->selesai = $selesai;
    }

    public function headings(): array
    {
        return ["TANGGAL", "NRP", "NAMA", "SHIFT", "MESIN", "MATERIAL", "INGOT", "EXGATE", "REJECT PARTS", "ALM TREAT", "OIL SCRAP", "FLUXING", "TAPPING", "STOK MOLTEN", "TEMPERATURE", "DROSS", "GAS AWAL", "GAS AKHIR"];
    }

    public function collection()
    {
        return LhpMelting::whereDate('tanggal', '>=',  $this->mulai)->whereDate('tanggal', '<=',  $this->selesai)->where('mesin', '=',  $this->mesin)->get(['tanggal', 'nrp', 'nama', 'shift', 'mesin', 'material', 'ingot', 'exgate', 'reject_parts', 'alm_treat', 'oil_scrap', 'fluxing', 'tapping', 'stok_molten', 'temperatur_tapping', 'dross', 'gas_awal', 'gas_akhir']);
    }
}
