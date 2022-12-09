<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateOpportunities;
use App\Models\Opportunity;
use App\Models\OpportunityHistory;
use App\Http\Requests\StoreOpportunityHistoryRequest;
use App\Http\Requests\UpdateOpportunityHistoryRequest;

class OpportunityHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOpportunityHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOpportunityHistoryRequest $request)
    {
//        dd($request->all());
        $request->validated();
        $opportunity = new OpportunityHistory();
        $opportunity -> user_id = auth()->id();
        $opportunity->status = $request ->status;
        $opportunity->comment = $request ->comment;
        $opportunity -> opportunity_id= $request ->OpportunityId;
        $opportunity->save();

        $opp = new Opportunity();
        $opp -> status = 'Approve';
        $opp->update();
        dd($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpportunityHistory  $opportunityHistory
     * @return \Illuminate\Http\Response
     */
    public function show(OpportunityHistory $opportunityHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpportunityHistory  $opportunityHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(OpportunityHistory $opportunityHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOpportunityHistoryRequest  $request
     * @param  \App\Models\OpportunityHistory  $opportunityHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOpportunityHistoryRequest $request, OpportunityHistory $opportunityHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpportunityHistory  $opportunityHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpportunityHistory $opportunityHistory)
    {
        //
    }
}
