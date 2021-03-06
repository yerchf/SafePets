<?php

namespace SAFEPETS\Http\Controllers;

use Illuminate\Http\Request;

use SAFEPETS\User;
use SAFEPETS\Publication;

use SAFEPETS\Http\Requests\StorePublicationRequest;
use SAFEPETS\Http\Requests\UpdatePublicationRequest;
use Illuminate\Database\Eloquent\Builder;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)    
    {
        if($request->get('search')!="")
        {
            $publications =Publication::whereLike(['name', 'category'], $request->get('search'))->where('state',1)->paginate(6);
        }
        else
        {                        
            $publications = Publication::where('state',1)->paginate(6);
        }
        return view('publications.publications', ['publications' => $publications]); 
    }

    public function showDistrict(Publication $publication)
    {
        return view('district.show', ['publication'=> $publication]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
        return view('publications.create', ['user'=> $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen_publication = 'image-not-found.png';
        if ($request->hasFile('imagen_publication')) {
            $file = $request->imagen_publication;

            $imagen_publication = time() . $file->getClientOriginalName();
            $file->storeAs('public/imgPublications', $imagen_publication);
        }
        $publication = new Publication();

        $publication->name  = $request->name;
        $publication->text = $request->text;        
        $publication->category = $request->category;
        $publication->phone = $request->phone;
        $publication->email = $request->email;
        $publication->img = $imagen_publication;

        $user = User::where('id', $request->user)->first();
        $publication->user()->associate($user);     

        $publication->save();

        $publications = Publication::all();
        return redirect()->route('publications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return view('publications.show', ['publication'=> $publication]);
    }

    public function showAboutas()
    {
        return view('aboutas.show');
    }

    public function showContact()
    {
        return view('contact.show');
    }

    public function showAuthorize()
    {
        $publications[] = Publication::all();
        $users []= User::all();
        
        return view('publications.showAuthorize', [ $publications, $users]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication, User $user)
    {
        return view('publications.edit', ['publication' => $publication,'user'=>$user]);
    }


  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publication = publication::findOrFail($id);

        if ($request->hasFile('img')) {

            // Eliminar imagen si  se va a actualizar
            $filePath = storage_path('app/public/images/' . $publication->img);

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Subir nueva imagen
            $file = $request->file('img');

            $image_profile = time() . $file->getClientOriginalName();

            $publication->img = $image_profile;

            $file->storeAs('public/images', $image_profile);
        }

        $publication->name = $request->name;
        $publication->text = $request->text;
        $publication->phone = $request->phone;
        $publication->email = $request->email;
        $publication->category = $request->category;
        $publication->state ="0";
        
        $publication->save();

        return redirect()->route('publications.show', $publication)->with('success', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
      
        $filePath = storage_path('app/public/imgPublications' . $publication->img);

        if (file_exists($filePath)) 
        {
            unlink($filePath);
        }

        // File::delete($filePath);

        $publication->delete();
        return redirect('/publications')->with('success', 'Eliminado');
    }


    ///////////////////////////allow

    public function allow($id )
    {   
        $publication = publication::findOrFail($id);
        $publication->state ="1";    
        $publication->save();

        return redirect()->route('publications.show', $publication)->with('success', 'Actualizado');
    }
}
