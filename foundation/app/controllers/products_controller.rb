class ProductsController < ApplicationController
  def index
  end

  def show
    if @geoproducts.respond_to? "product_title_#{params[:id]}"
      @content = {
        "title" => @geoproducts.public_send( "product_title_#{params[:id]}" ).html_safe,
        "intro" => @geoproducts.public_send( "product_intro_#{params[:id]}" ).html_safe,
        "desc" => @geoproducts.public_send( "product_description_#{params[:id]}" ).html_safe,
        "img" => @geoproducts.public_send( "product_image_#{params[:id]}" ).html_safe
      }
    else
      render 'error'
    end
  end
end
