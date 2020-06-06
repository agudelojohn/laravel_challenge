<?php 

// namespace App\Exports;

// use App\Event;
// use Maatwebsite\Excel\Concerns\FromCollection;

// class EventsExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Event::all();
//     }
// }
namespace App\Exports;

use App\Event;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventsExport implements FromQuery
{
    use Exportable;
    public function __construct($type)
    {
        $this->type = $type;
        if($type=='today')
        {
            $this->today =  Carbon::today();
        }
        if ( $type=='five'){
            $this->today =  Carbon::today();
            $end = Carbon::today();
            $daysToAdd = 5;
            $end = $end->addDays($daysToAdd);
            $this->end = $end;
        }
    }
    

    public function query()
    {
        if($this->type == 'all'){
        return Event::query()->where('userOwner', '=', Auth::id());
        }
        if($this->type == 'today'){
            return Event::query()->where('userOwner', '=', Auth::id())->where('startDate', '=', $this->today);
        }
        if($this->type == 'five'){
            return Event::query()->where('userOwner', '=', Auth::id())->whereBetween('startDate', [$this->today, $this->end]);
        }
    }
}
