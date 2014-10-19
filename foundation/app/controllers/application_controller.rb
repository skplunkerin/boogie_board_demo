class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception

  before_filter :get_ip        
  before_filter :get_language  
  before_filter :global_page_elems
  
    
  def get_ip                   
    params[:demo] = {}#needed a place to set this globaly

    @ip = request.env["HTTP_X_FORWARDED_FOR"]
    if @ip.nil?                
      @ip = "64.147.131.201"   
    end
    return @ip                 
  end

  def get_language             
    if request.env['HTTP_ACCEPT_LANGUAGE']
      geomatic_language = request.env['HTTP_ACCEPT_LANGUAGE'].scan(/^[a-z]{2}/).first
    else
      geomatic_language = 'en' 
    end                        
    I18n.locale = geomatic_language 
  end
  
  def global_page_elems        
    @geonav = Geomatic.module( 'HARwcNCWU7Rr9uPz', @ip ); # Navigation
    @geoheader = Geomatic.module( 'F9w6XqkDpCiFts8k', @ip ); # Header
    @geofooter = Geomatic.module( 'CEmWNBOVEkJbmbBZ', @ip ); # Footer
    @geoproducts = Geomatic.module( '4q6YTMsOFduabnOM', @ip ); # Products
    @geoabout = Geomatic.module( 'NYtN5tUhbicFNjPv', @ip ); # About us
    @geocontact = Geomatic.module( 'yXrd95G8JTJtFdcD', @ip ); # Contact Us
  end
end
