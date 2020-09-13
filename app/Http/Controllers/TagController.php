<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class TagController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        Tag::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title)
        ]);

        return redirect()->route('admin.tags.index')->with('success',$tag->title.' : Tag Successfully Created');
    }

    public function edit(Tag $tag)
    {
        abort_if(Gate::denies('product_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        $tag->slug=Str::slug($request->title);
        $tag->save();

        return redirect()->route('admin.tags.index')->with('success',$tag->title.' : Tag Successfully Updated');
    }

    public function show(Tag $tag)
    {
        abort_if(Gate::denies('product_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.show', compact('tag'));
    }
    public function updateStatus(Request $request)
    {   abort_if(Gate::denies('tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $tag = Tag::findOrFail($request->tag_id);
        $tag->status = $request->status;
        $tag->save();

        return response()->json(['success' => $tag->title.' : Tag status updated successfully.']);
    }
    public function destroy(Tag $tag)
    {
        abort_if(Gate::denies('product_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tag->delete();
        return back()->with('success',$tag->title.' : Tag Successfully Deleted');
    }
}
