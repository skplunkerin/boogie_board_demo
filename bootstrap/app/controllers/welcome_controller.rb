class WelcomeController < ApplicationController
  before_filter :set_relative_path

  def index
  end

  private
  def set_relative_path
    @path = {
              :products => 'welcome/products/'
            }
  end
end
