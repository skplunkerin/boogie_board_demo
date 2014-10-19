# Geomatic (beta)
# TODO: Make this a gem
#
#
# Author::    Wylie Thomas  (mailto:wylie@wyliethomas.com)
# Version::   0.0.1
# Copyright:: Copyright (c) 2014 Quadmodel7, LLC
#
# USAGE
# load your apikey in an initializer, however you prefer to do that.
# I like to make a config.yml for settings like this.
#
# In your controller
# I18n.locale = 'en'
# @geoPage = Geomaticly.page('[YOUR PAGE KEY]')
#
# In your view
# <%= @geoPage.[SOME BLOCK TITLE] %>

require 'net/http'
require 'json'
require 'ostruct'
require 'open-uri'

class Geomatic

  def self.mobile(agent)
    #See if the request is mobile
    if agent.to_s.downcase =~ /palm|blackberry|nokia|phone|midp|mobi|symbian|chtml|ericsson|minimo|audiovox|motorola|samsung|telit|upg1|windows ce|ucweb|astel|plucker|x320|x240|j2me|sgh|portable|sprint|docomo|kddi|softbank|android|mmp|pdxgw|netfront|xiino|vodafone|portalmmm|sagem|mot-|sie-|ipod|up\\.b|webos|amoi|novarra|cdm|alcatel|pocket|ipad|iphone|mobileexplorer|mobile|zune/
      #IS MOBILE
    else
      #IS NOT MOBILE
      lat = 40.760779
      lng = -111.891047
      coords = Geocoder.search("#{lat}, #{lng}")
      p coords
      #location = GeoIP.new("#{Rails.root}/vendor/data/GeoIPCity.dat").city("40.760779, 111.891047")
      #p "LOC"
      #p location
    end
  end

  def self.module(key, ip)
    data = prod_content(key, ip, "#{I18n.locale}")
    data = JSON.parse(data)
    blocks = {}
    for item in data
      if !item["title"].empty?
        block = {item["method"] => item["body"]}
        blocks.merge!(block)
