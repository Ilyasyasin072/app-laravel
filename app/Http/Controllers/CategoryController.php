<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    // json

    protected $category;
    public function index_data()
    {
        $category = Category::ForDatatable();
        return datatables()->of($category)
            ->addColumn('action', function ($categoryd) {
                return view('categories._action', ['categoryd' => $categoryd])->render();
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    // views
    public function index()
    {
        $menus = 'Menus Category';
        return view('categories.index', ['menus' => $menus]);
    }

    // store
    public function store(Request $request)
    {
    }

    // edit
    public function edit(Request $request, $id)
    {
    }

    // update
    public function update(Request $request, $id)
    {
    }

    // delete
    public function delete($id)
    {
        // try {
        //     $del = Category::delete($id);
        //     return response()->json(['success' => 'delete success'], 200);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return response()->json(['error' => 'erros'], 500);
        // } catch(\Illuminate\Database\QueryException $e) {
        //     return response()->json(['error' => 'error database'], 500);

        // }

        $this->category =  Category::where('id', $id)->first();

        $format = \Request::format();
        if ($this->category != null) {
            $this->category->delete();
            switch ($format) {
                case 'html':
                default:
                    $render = redirect()
                                ->route('category-web-index')
                                ->with('success', 'Category telah dihapus!');
                    break;
            }
        }
        else {
            switch ($format) {
                case 'html':
                default:
                    $render = redirect()
                                ->route('category-web-index')
                                ->with('warning', 'error');
                    break;
            }
        }
        return $render;
    }
}
