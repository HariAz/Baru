<?php

namespace App\Http\Controllers;

use App\Models\model_Conduct_Audit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class controller_Conduct_Audit extends Controller
{
    // Menampilkan halaman utama
    public function index()
    {
        // Menampilkan halaman utama
        return view('index');
    }

    // Menampilkan tabel audit
    public function showAuditTable()
    {
        return view('audit_table');
    }

    // Menampilkan halaman untuk membuat checklist audit
    public function createAuditChecklist()
    {
        return view('create_audit_checklist');
    }

    // Proses menyimpan checklist audit
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'audit_plan_no' => 'required|string|max:12',
            'audit_type' => 'required|string|max:40',
            'program_code' => 'required|string|max:12',
            'subject' => 'required|string|max:120',
            'date_of_audit' => 'required|date',
            'area_manager' => 'required|string|max:12',
            'concurrence' => 'required|string|max:12',
        ]);

        // Buat ID Audit Checklist berdasarkan format: Audit Type / Program Code / tiga angka
        $auditTypeInitials = strtoupper(substr($request->audit_type, 0, 2));
        $programCode = strtoupper($request->program_code);

        // Ambil angka terakhir di database
        $lastAudit = model_Conduct_Audit::where('i_id_audit_cklsnmbr', 'LIKE', "$auditTypeInitials/$programCode/%")
            ->orderBy('i_id_audit_cklsnmbr', 'desc')
            ->first();

        $newNumber = $lastAudit ? str_pad(((int)substr($lastAudit->i_id_audit_cklsnmbr, -3)) + 1, 3, '0', STR_PAD_LEFT) : '001';
        $i_id_audit_cklsnmbr = "$auditTypeInitials/$programCode/$newNumber";

        // Simpan ke database
        try {
            model_Conduct_Audit::create([
                'i_id_audit_cklsnmbr' => $i_id_audit_cklsnmbr,
                'i_id_aud_plnnbr' => $request->audit_plan_no,
                'n_aud_type' => $request->audit_type,
                'i_id_prgm_code' => $request->program_code,
                'n_aud_plan' => $request->subject,
                'd_actl_start' => $request->date_of_audit,
                'i_id_area_mngr' => $request->area_manager,
                'i_id_cncrnc' => $request->concurrence,
            ]);

            // Redirect ke halaman utama (index) jika sukses
            return redirect()->route('audit.index')->with('success', 'Data audit berhasil disimpan');
        } catch (\Exception $e) {
            // Jika gagal, tampilkan error dan log error
            Log::error('Error saat menyimpan data: ' . $e->getMessage());
            return redirect()->route('audit.index')->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    // Proses memperbarui checklist audit
    public function updateAuditChecklist(Request $request)
    {
        // Logika untuk memperbarui checklist audit
        // Ambil data dari $request dan proses sesuai kebutuhan
        return redirect()->route('audit.table')->with('status', 'Checklist audit berhasil diperbarui.');
    }
}
