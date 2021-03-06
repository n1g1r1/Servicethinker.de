<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Publication
pages: false
files:
  fields:
    caption:
      label: Caption
      type: text
    sourcename:
      label: Source informations
      type: text
      placeholder: Photograph, Event (optional), Month/Year
    sourceurl:
      label: URL to source
      type: url

fields:

  publicationMeta:
    label: Publication Meta
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  pubdate:
    label:  Date
    type:   date
    width:  1/2
    format: DD.MM.YYYY
  authors:
    label: Authors
    type: tags
  description:
    label: Description
    type:  text
    icon:  info-circle
  tags:
    label: Tags
    type:  tags
    width: 1/2
  type:
    label: Type of publication
    type: select
    default: unpublished
    width: 1/2
    options:
      article: Zeitungs- oder Zeitschriftenartikel
      book: Buch
      booklet: Gebundenes Druckwerk
      conference: Wissenschaftliche Konferenz
      inbook: Teil eines Buches
      incollection: Teil eines Buches (z. B. Aufsatz in einem Sammelband) mit einem eigenen Titel
      inproceedings Artikel in einem Konferenzbericht
      manual: Technische Dokumentation
      mastersthesis: Diplom-, Magister- oder andere Abschlussarbeit (außer Promotion)
      misc: beliebiger Eintrag (wenn nichts anderes passt)
      phdthesis: Doktor- oder andere Promotionsarbeit
      proceedings: Konferenzbericht
      techreport: veröffentlichter Bericht einer Hochschule oder anderen Institution
      unpublished: nicht formell veröffentlichtes Dokument
  booktitle:
    label: Book title
    type: tags
    width: 1/2
  publisher:
    label: Publisher
    type: tags
    width: 1/2

  coverimage:
    label: Cover image
    type: selector
    mode: single
    options: images
    types:
      - image

  publicationContent:
    label: Publication Content
    type: headline
  text:
    label: Introduction to this section
    type: markdown
  urltopdf:
    label: URL to PDF
    type: url
  urltobook:
    label: URL to book
    type: url
